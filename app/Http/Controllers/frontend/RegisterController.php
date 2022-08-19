<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Mail\NewUserRegistered;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    protected $user_email;
    protected $subject;

    public function index()
    {
        $data['meta'] = staticPageMeta(3);
        return view('frontend.registration.register', $data);
    }

    public function store(RegistrationRequest $request)
    {
        $user = new User();
        $user->name = $request->first_name . ' ' . $request->last_name;
        $slug = Str::slug($user->name);
        if (User::where('slug', $slug)->count() > 0) {
            $user->slug = $slug . '-' . mt_rand();
        } else {
            $user->slug = $slug;
        }
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->user_type = 'user';
        $user->active_status = get_option('verification_email_after_registration') == '1' ? '0' : '1';
        $user->activation_code = get_option('verification_email_after_registration') == '1' ? mt_rand() : null;
        $user->save();

        if (get_option('verification_email_after_registration') == '0') {
            $user->active_status = '1';
            $user->activation_code = null;
            $user->is_email_verified = '1';
            $user->email_verified_at = Carbon::now()->format("Y-m-d H:i:s");
            $user->save();
            Auth::login($user);
            return redirect(route('memberDashboard'));

        } else {

            if (checkSMTPSetting())
            {
                /** send mail to member */
                $activation_code = $user->activation_code;
                $mail_data = [
                    'subject' => 'Verify your email address',
                    'user_name' => $request->first_name . ' ' . $request->last_name,
                    'activation_code' => $activation_code
                ];
                Mail::to($request->email)->send(new NewUserRegistered($mail_data));
            }


            return redirect()->back()->with('success', 'Registration complete. Please check your inbox and activate your account.');
        }
    }


    public function verifyMemberEmailAddress($activation_code)
    {
        if (User::whereActivationCode($activation_code)->count() > 0) {
            $user = User::whereActivationCode($activation_code)->first();
            $user->active_status = '1';
            $user->activation_code = null;
            $user->is_email_verified = '1';
            $user->save();

            Auth::login($user);
            return redirect(route('memberDashboard'));


        } else {
            return route('login');
        }
    }
}
