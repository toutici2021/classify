<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Payment history',
            'activeMenu' => 'payment-history',
            'payments' => Payment::with('ads', 'user')->get()
        ];

        return view('admin.payment.index', $data);
    }


    public function paymentInfo($transaction_id)
    {

        $payment = Payment::where('local_transaction_id', $transaction_id)->first();

        if (!$payment) {
            return view('admin.error.error_404');
        }

        $data = [
            'title' => 'Payment Details',
            'activeMenu' => 'payment-history',
            'payment' => $payment
        ];

        return view('admin.payment.details', $data);
    }


}
