<?php

namespace App\Http\Controllers\admin;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\MailEnvironmentRequest;
use App\Http\Requests\MetaRequest;
use App\Mail\SendTestEmail;
use App\Meta;
use App\Option;
use App\Services\DotEnvService;
use App\Specs\EnvironmentManager;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Larapack\ConfigWriter\Repository;
use Mail;
use Artisan;
use Str;
use DB;
use Image;
use File;

class SettingsController extends Controller
{

    protected $environmentManager;

    /**
     * SettingsController constructor.
     * @param EnvironmentManager $environmentManager
     */
    public function __construct(EnvironmentManager $environmentManager)
    {
        $this->environmentManager = $environmentManager;
    }

    public function GeneralSettings()
    {
        $data = [
            'title' => 'General Settings',
            'activeMenu' => 'general-settings',
        ];

        return view('admin.settings.general', $data);
    }


    public function paymentSettings()
    {
        $data = [
            'title' => 'Payment Settings',
            'activeMenu' => 'payment-settings',
            'paypal_client_id' => config('paypal.client_id'),
            'paypal_secret' => config('paypal.secret'),
            'paypal_mode' => config('paypal.settings.mode'),

        ];
        return view('admin.settings.payment', $data);
    }


    public function socialUrl()
    {
        $data = [
            'title' => 'Social URL',
            'activeMenu' => 'social-url'
        ];

        return view('admin.settings.social', $data);
    }


    /**
     * @return Application|Factory|View
     */
    function smtpSettings()
    {
        $data = [
            'title' => 'SMTP Settings',
            'activeMenu' => 'smtp-settings',
            'mail_driver' => config('mail.driver'),
            'smtp_mail_host' => config('mail.host'),
            'smtp_mail_port' => config('mail.port'),
            'smtp_mail_username' => config('mail.username'),
            'smtp_mail_password' => config('mail.password'),
            'smtp_mail_encryption' => config('mail.encryption'),
            'smtp_from_name' => config('mail.from.name'),
            'smtp_from_mail' => config('mail.from.address'),

        ];
        return view('admin.settings.smtp', $data);
    }


    public function saveMailEnvironment(Request $request)
    {
        Artisan::call('config:clear');
        Artisan::call("cache:clear");

        $dotEnvService = new DotEnvService();
        $dotEnvService->setEnvironmentValue('MAIL_DRIVER', $request->mail_driver);
        $dotEnvService->setEnvironmentValue('MAIL_HOST', $request->smtp_mail_host);
        $dotEnvService->setEnvironmentValue('MAIL_USERNAME', $request->smtp_mail_username);
        $dotEnvService->setEnvironmentValue('MAIL_PASSWORD', $request->smtp_mail_password);
        $dotEnvService->setEnvironmentValue('MAIL_PORT', $request->smtp_mail_port);
        $dotEnvService->setEnvironmentValue('MAIL_ENCRYPTION', $request->smtp_mail_encryption);
        $dotEnvService->setEnvironmentValue('MAIL_FROM_ADDRESS', $request->smtp_from_mail);
        $dotEnvService->setEnvironmentValue('MAIL_FROM_NAME', '"' . $request->smtp_from_name . '"');

        if ($request->ajax()) {
            return ['success' => 1, 'message' => 'SMTP Settings successfully saved'];
        }

    }


    public function metaManagement()
    {
        $data = [
            'title' => 'Meta Management',
            'activeMenu' => 'meta-management',
            'metas' => Meta::all()

        ];
        return view('admin.settings.meta-management', $data);
    }

    public function editMeta($id)
    {
        $data = [
            'title' => 'Edit Meta',
            'activeMenu' => 'meta-management',
            'meta' => Meta::find($id)

        ];
        return view('admin.settings.edit-meta', $data);
    }

    /**
     * @param MetaRequest $request
     * @param $id
     * @return RedirectResponse
     */

    public function updateMeta(MetaRequest $request, $id)
    {
        $meta = Meta::find($id);
        $meta->meta_title = $request->meta_title;
        $meta->meta_description = $request->meta_description;
        $meta->meta_keywords = $request->meta_keywords;
        $meta->save();

        return redirect()->route('meta_management')->with(responseMessage(1, 'success', 'Meta has been updated'));

    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    function sendTestMail(Request $request)
    {
        if (checkSMTPSetting())
        {
            Mail::to($request->to)->send(new SendTestEmail($request));
        }

        return redirect()->back()->with(responseMessage(1, 'success', 'Test email sent. Check inbox'));

    }


    public function AdSettings()
    {
        $data = [
            'title' => 'Ads Settings & Pricing',
            'activeMenu' => 'ads-settings'
        ];

        return view('admin.settings.ads', $data);
    }


    public function OtherSettings()
    {
        $data = [
            'title' => 'Other Settings',
            'activeMenu' => 'other-settings'
        ];

        return view('admin.settings.others', $data);

    }


    public function saveOtherSettings(Request $request)
    {

        if ($request->logo) {
            $logo = $request->logo;
            $imageName = $logo->getClientOriginalName();
            $fileName = time() . '-' . $imageName;
            $imageUrl = 'public/uploads/logo/' . $fileName;
            Image::make($logo)->resize(180, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($imageUrl);

            update_option('logo', $imageUrl);
        }

        return redirect()->back()->with(responseMessage(1, 'success', 'Logo updated'));
    }



    /**
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function updateSettings(Request $request)
    {
        $inputs = Arr::except($request->input(), ['_token']);

        foreach ($inputs as $key => $value) {
            $option = Option::firstOrCreate(['option_key' => $key]);
            $option->option_value = $value;
            $option->save();

            if ($key == 'default_timezone') {
                $dotEnvService = new DotEnvService();
                $dotEnvService->setEnvironmentValue('APP_TIMEZONE', $value);
            }

        }


        if ($request->ajax()) {
            return ['success' => 1, 'message' => 'Settings saved successfully'];
        }
        return redirect()->back()->with('success', 'Settings saved successfully');
    }

    public function savePaymentSettings(Request $request)
    {
        $inputs = Arr::except($request->input(), ['_token']);
        Artisan::call('config:clear');
        Artisan::call("cache:clear");


        foreach ($inputs as $key => $value) {
            $option = Option::firstOrCreate(['option_key' => $key]);
            $option->option_value = $value;
            $option->save();


            if ($key == 'PAYPAL_MODE') {
                /**  ====== update .end file ====== */
                $paypal_mode_key = 'PAYPAL_MODE';
                $new_paypal_mode_value = $request->PAYPAL_MODE;
                $old_new_paypal_mode_value = env("PAYPAL_MODE");

                if ($old_new_paypal_mode_value != $new_paypal_mode_value) {
                    $path = base_path('.env');
                    if (file_exists($path)) {
                        file_put_contents(
                            $path, str_replace(
                                $paypal_mode_key . '=' . $old_new_paypal_mode_value,
                                $paypal_mode_key . '=' . $new_paypal_mode_value,
                                file_get_contents($path)
                            )
                        );
                    }
                }
            }

            if ($key == 'PAYPAL_CLIENT_ID') {

                $paypal_client_id_key = 'PAYPAL_CLIENT_ID';
                $new_paypal_client_id_value = $request->PAYPAL_CLIENT_ID;
                $old_paypal_client_id_value = env($paypal_client_id_key);


                if ($old_paypal_client_id_value != $new_paypal_client_id_value) {
                    $path = base_path('.env');
                    if (file_exists($path)) {
                        file_put_contents(
                            $path, str_replace(
                                $paypal_client_id_key . '=' . $old_paypal_client_id_value,
                                $paypal_client_id_key . '=' . $new_paypal_client_id_value,
                                file_get_contents($path)
                            )
                        );
                    }
                }
            }

            if ($key == 'PAYPAL_SECRET') {

                $paypal_secret_key = 'PAYPAL_SECRET';
                $new_paypal_secret_value = $request->PAYPAL_SECRET;
                $old_paypal_secret_value = env($paypal_secret_key);


                if ($old_paypal_secret_value != $new_paypal_secret_value) {
                    $path = base_path('.env');
                    if (file_exists($path)) {
                        file_put_contents(
                            $path, str_replace(
                                $paypal_secret_key . '=' . $old_paypal_secret_value,
                                $paypal_secret_key . '=' . $new_paypal_secret_value,
                                file_get_contents($path)
                            )
                        );
                    }
                }
            }

        }

        $config = new Repository('app');
        $config->set('timezone', get_option('default_timezone'));
        $config->save();


        if ($request->ajax()) {
            return ['success' => 1, 'message' => 'Settings saved successfully'];
        }
        return redirect()->back()->with('success', 'Settings saved successfully');
    }

    public function saveMailchimpSettings(Request $request)
    {
        $inputs = Arr::except($request->input(), ['_token']);

        Artisan::call('config:clear');
        Artisan::call("cache:clear");

        foreach ($inputs as $key => $value) {
            $option = Option::firstOrCreate(['option_key' => $key]);
            $option->option_value = $value;
            $option->save();

            if ($key == 'MAILCHIMP_APIKEY') {
                /**  ====== update .end file ====== */
                $mailchimp_apikey_key = 'MAILCHIMP_APIKEY';
                $new_mailchimp_apikey_value = $request->MAILCHIMP_APIKEY;
                $old_mailchimp_apikey_value = env("MAILCHIMP_APIKEY");

                if ($old_mailchimp_apikey_value != $new_mailchimp_apikey_value) {
                    $path = base_path('.env');
                    if (file_exists($path)) {
                        file_put_contents(
                            $path, str_replace(
                                $mailchimp_apikey_key . '=' . $old_mailchimp_apikey_value,
                                $mailchimp_apikey_key . '=' . $new_mailchimp_apikey_value,
                                file_get_contents($path)
                            )
                        );
                    }
                }
            }

            if ($key == 'MAILCHIMP_LIST_ID') {

                $mailchimp_list_id_key = 'MAILCHIMP_LIST_ID';
                $new_mailchimp_list_id_value = $request->MAILCHIMP_LIST_ID;
                $old_mailchimp_list_id_value = env($mailchimp_list_id_key);


                if ($old_mailchimp_list_id_value != $new_mailchimp_list_id_value) {
                    $path = base_path('.env');
                    if (file_exists($path)) {
                        file_put_contents(
                            $path, str_replace(
                                $mailchimp_list_id_key . '=' . $old_mailchimp_list_id_value,
                                $mailchimp_list_id_key . '=' . $new_mailchimp_list_id_value,
                                file_get_contents($path)
                            )
                        );
                    }
                }
            }

        }

        $config = new Repository('app');
        $config->set('timezone', get_option('default_timezone'));
        $config->save();


        if ($request->ajax()) {
            return ['success' => 1, 'message' => 'Settings saved successfully'];
        }
        return redirect()->back()->with('success', 'Settings saved successfully');
    }


    public function countries()
    {
        $data = [
            'title' => 'Country Setting',
            'activeMenu' => 'country-setting',
            'countries' => Country::all()
        ];

        return view('admin.settings.country', $data);
    }


    public function SubscriptionSettings(Request $request)
    {
        $data = [
            'title' => 'Subscription Settings',
            'activeMenu' => 'subscription-settings',
        ];


        return view('admin.settings.subscriptions', $data);
    }


    public function monetize()
    {
        $data = [
            'title' => 'Monetize your site',
            'activeMenu' => 'monetize_your_site'
        ];


        return view('admin.settings.monetize', $data);
    }


}
