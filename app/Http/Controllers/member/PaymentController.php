<?php

namespace App\Http\Controllers\member;

use App\Advertise;
use App\Http\Controllers\Controller;
use App\Mail\PaymentReceived;
use App\Models\Payment;
use Illuminate\Http\Request;
use Arr;
use Auth;
use Stripe;
use Session;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function index()
    {
        $data['title'] = 'Payment History';
        $data['menu'] = 'payment';
        $data['ads'] = Advertise::where('user_id', auth::user()->id)->where('payment_status', 'due')->paginate(10);
        $data['payments'] = Payment::with('ads', 'user')->where('user_id', auth()->user()->id)->paginate(15);
        return view('frontend.member.payment.index', $data);
    }


    public function checkout($transaction_id)
    {
        $payment = Payment::whereLocalTransactionId($transaction_id)->whereStatus('initial')->first();

        $data = [
            'title' => 'Checkout',
            'menu' => 'Payment',
            'payment' => $payment
        ];
        if ($payment) {
            return view('frontend.member.payment.checkout', $data);
        }
        return view('frontend.member.payment.invalid_transaction', $data);

    }

    public function chargePayment(Request $request, $transaction_id)
    {
        if (Payment::whereLocalTransactionId($transaction_id)->whereStatus('initial')->count() > 0)
        {
            $payment = Payment::whereLocalTransactionId($transaction_id)->whereStatus('initial')->first();
            if ($payment->payment_method == 'stripe') {
                try {
                    $stripeToken = $request->stripeToken;
                    Stripe\Stripe::setApiKey(get_stripe_key('secret'));
                    $charge = Stripe\Charge::create([
                        "amount" => ($payment->amount * 100),
                        "currency" => $payment->currency,
                        "source" => $stripeToken,
                        "description" => $payment->ads->title . " (" . ucfirst($payment->ads->price_plan) . ") ad posting"
                    ]);

                    if ($charge->status == 'succeeded') {
                        $payment->status = 'success';
                        $payment->charge_id_or_token = $charge->id;
                        $payment->description = $charge->description;
                        //$payment->payment_created = $charge->created;
                        $payment->save();

                        /**
                         * Update ad as paid
                         */

                        $payment->ads->payment_status = 'paid';
                        $payment->ads->save();


                       if (checkSMTPSetting())
                       {
                           /**
                            * Send email to customer with payment recipient
                            */
                           $mail_data = [
                               'subject' => 'Payment received',
                               'ads_title' => $payment->ads->title,
                               'seller_name' => $payment->ads->seller_name,
                               'payment_amount' => $payment->amount . ' ' . $payment->currency,
                           ];
                           Mail::to($payment->ads->seller_email)->send(new PaymentReceived($mail_data));
                       }

                        return redirect(route('memberAds'))->with(responseMessage(1, 'success', 'Payment received. You will be redirected soon.'));
                    }
                } catch (\Stripe\Error\Card $e) {
                    // The card has been declined
                    $payment->status = 'declined';
                    $payment->description = 'Payment declined';
                    $payment->save();
                    return responseMessage(1, 'error', 'Payment declined');
                }
            } else {
                return responseMessage(1, 'error', 'Invalid payment request');
            }
        } else {
            return responseMessage(1, 'error', 'Invalid payment request');
        }

    }
}
