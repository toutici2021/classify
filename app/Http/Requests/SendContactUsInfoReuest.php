<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContactUsInfoReuest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:80'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please input your name',
            'email.required' => 'Please input your email address',
            'message.required' => 'Tell us when your enquiry is'
        ];
    }
}
