<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Str;
use DB;
use Carbon\Carbon;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;


    public function getEmail()
    {

        return view('auth.passwords.reset');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        $user_data = DB::table('users')
            ->where('email', '=', $request->email)
            ->first();

        $user_name = $user_data->first_name . ' ' . $user_data->last_name;


        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        if (checkSMTPSetting()) {
            Mail::send('auth.verify', ['token' => $token, 'user_name' => $user_name], function ($message) use ($request) {
                $message->from(env('MAIL_FROM_ADDRESS'), get_option('site_name'));
                $message->to($request->email);
                $message->subject('Reset Password Notification');
            });
        }

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

}
