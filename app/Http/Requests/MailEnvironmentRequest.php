<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailEnvironmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->get('mail_driver')) {
            case 'smtp' :
                return [
                    'mail_driver' => 'required|string',
                    'smtp_mail_host' => 'required|string',
                    'smtp_mail_port' => 'required',
                    'smtp_mail_username' => 'required|string',
                    'smtp_mail_password' => 'required|string',
                    'smtp_mail_encryption' => 'required|string',
                    'smtp_from_name' => 'required|string',
                    'smtp_from_mail' => 'required|email',
                ];
                break;
        }
    }


    public function messages()
    {
        return [
            'smtp_mail_host.required' => 'Mail host is required. Eg: smtp.gmail.com',
            'smtp_mail_username.required' => 'Mail username is required',
            'smtp_from_mail.required' => 'From mail address is required. Eg: johndoe@example.com',
            'smtp_mail_port.required' => 'SMTP mail port is required. Eg: 587 or 465 etc',
            'smtp_mail_encryption.required' => 'Mail encryption is required. Eg: tls or ssl'

        ];
    }
}
