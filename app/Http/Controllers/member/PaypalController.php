<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Mail\PaymentReceived;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use Illuminate\Support\Facades\Mail;


class PaypalController extends Controller
{
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    public function pay()
    {
        $data['title'] = 'Manage Ads';
        $data['menu'] = 'manage_ads';
        return view('frontend.member.payment.paypal-pay', $data);
    }


    public function submitPayment(Request $request, $local_transaction_id)
    {

        if (\App\Models\Payment::whereLocalTransactionId($local_transaction_id)->whereStatus('initial')->count() > 0) {
            $localPayment = \App\Models\Payment::whereLocalTransactionId($local_transaction_id)->whereStatus('initial')->first();

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item_1 = new Item();
            $item_1->setName($localPayment->ads->title)/** item name **/
            ->setCurrency(get_option('currency_sign'))
                ->setQuantity(1)
                ->setPrice($localPayment->amount);
            /** unit price **/

            $item_list = new ItemList();
            $item_list->setItems(array($item_1));

            $amount = new Amount();
            $amount->setCurrency(get_option('currency_sign'))
                ->setTotal($localPayment->amount);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription($localPayment->ads->title);

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(route('get_paypal_status'))/** Specify return URL **/
            ->setCancelUrl(route('get_paypal_status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
            /** dd($payment->create($this->_api_context));exit; **/
            try {

                $payment->create($this->_api_context);

            } catch (\PayPal\Exception\PPConnectionException $ex) {

                if (\Config::get('app.debug')) {

                    \Session::put('error', 'Connection timeout');
                    return redirect()->back();

                } else {

                    \Session::put('error', 'Some error occur, sorry for inconvenient');
                    return redirect()->back();

                }

            }

            foreach ($payment->getLinks() as $link) {

                if ($link->getRel() == 'approval_url') {

                    $redirect_url = $link->getHref();
                    break;

                }
            }

            /** add payment ID to session **/
            Session::put('paypal_payment_id', $payment->getId());
            Session::put('local_payment_id', $localPayment->id);
            if (isset($redirect_url)) {
                /** redirect to paypal **/
                return Redirect::away($redirect_url);

            }

            \Session::put('error', 'Unknown error occurred');
            return redirect()->back();
        } else {
            return redirect(route('memberAds'))->with(responseMessage(1, 'error', 'Invalid transaction'));
        }

    }

    public function getStatus(Request $request)
    {


        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        $local_payment_id = Session::get('local_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        Session::forget('local_payment_id');
        if (empty($request->PayerID) || empty($request->token)) {

            return redirect(route('memberAds'))->with(responseMessage(1, 'error', 'Payment has been declined'));
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);


        if ($result->getState() == 'approved') {
            $transactions = $result->getTransactions();
            $localPayment = \App\Models\Payment::find($local_payment_id);
            $localPayment->status = 'success';
            $localPayment->charge_id_or_token = $result->getId();
            $localPayment->description = $transactions[0]->description;
            $localPayment->payer_email = $result->getPayer()->getPayerInfo()->email;
            $localPayment->save();
            $localPayment->ads->payment_status = 'paid';
            $localPayment->ads->save();

            if (checkSMTPSetting())
            {
                /**
                 * Send email to customer with payment recipient
                 */
                $mail_data = [
                    'subject' => 'Payment received',
                    'ads_title' => $localPayment->ads->title,
                    'seller_name' => $localPayment->ads->seller_name,
                    'payment_amount' => $localPayment->amount . ' ' . $localPayment->currency,
                ];
                Mail::to($localPayment->ads->seller_email)->send(new PaymentReceived($mail_data));
            }

            return redirect(route('memberAds'))->with(responseMessage(1, 'success', 'Payment has been received successfully'));

        }

        return redirect(route('memberAds'))->with(responseMessage(1, 'error', 'Payment has been declined'));

    }

}
