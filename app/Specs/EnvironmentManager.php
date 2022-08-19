<?php


namespace App\Specs;

use App\Http\Requests\MailEnvironmentRequest;
use Exception;


class EnvironmentManager
{

    private $envPath;

    public function __construct()
    {
        $this->envPath = base_path('.env');
    }


    public function saveMailVariables(MailEnvironmentRequest $request)
    {
        $mailData = $this->getMailData($request);

        try {
            file_put_contents($this->envPath, str_replace(
                $mailData['old_mail_data'],
                $mailData['new_mail_data'],
                file_get_contents($this->envPath)
            ));


        } catch (Exception $e) {
            return responseMessage(0, 'error', 'Error saving mail variables');
        }

        return responseMessage(1, 'error', 'Mail variables successfully saved');
    }

    private function getMailData($request)
    {
        $mailFromCredential = "";
        $extraMailData = "";
        $extraOldMailData = "";
        $oldMailData = "";
        $newMailData = "";

        if (env('MAIL_FROM_ADDRESS') !== NULL && env('MAIL_FROM_NAME') !== NULL) {
            $mailFromCredential =
                'MAIL_FROM_ADDRESS=' . config('mail.from.address') . "\n" .
                'MAIL_FROM_NAME="' . config('mail.from.name') . "\"\n\n";
        }

        switch ($request->mail_driver) {

            case 'smtp':

                $oldMailData =
                    'MAIL_DRIVER=' . config('mail.driver') . "\n" .
                    'MAIL_HOST=' . config('mail.host') . "\n" .
                    'MAIL_PORT=' . config('mail.port') . "\n" .
                    'MAIL_USERNAME=' . config('mail.username') . "\n" .
                    'MAIL_PASSWORD=' . config('mail.password') . "\n" .
                    'MAIL_ENCRYPTION=' . config('mail.encryption') . "\n\n" .
                    $mailFromCredential;

                $newMailData =
                    'MAIL_DRIVER=' . $request->mail_driver . "\n" .
                    'MAIL_HOST=' . $request->smtp_mail_host . "\n" .
                    'MAIL_PORT=' . $request->smtp_mail_port . "\n" .
                    'MAIL_USERNAME=' . $request->smtp_mail_username . "\n" .
                    'MAIL_PASSWORD=' . $request->smtp_mail_password . "\n" .
                    'MAIL_ENCRYPTION=' . $request->smtp_mail_encryption . "\n\n" .
                    'MAIL_FROM_ADDRESS=' . $request->smtp_from_mail . "\n" .
                    'MAIL_FROM_NAME="' . $request->smtp_from_name . "\"\n\n";

                break;
        }

        return [
            'old_mail_data' => $oldMailData,
            'new_mail_data' => $newMailData,
            'extra_mail_data' => $extraMailData,
            'extra_old_mail_data' => $extraOldMailData
        ];
    }

}
