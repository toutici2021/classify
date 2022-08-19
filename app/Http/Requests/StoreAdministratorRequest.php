<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



/**
 * @property mixed first_name
 * @property mixed last_name
 * @property mixed email
 * @property mixed phone
 * @property mixed gender
 * @property mixed country
 * @property mixed password
 */


class StoreAdministratorRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'first_name.required' => 'Please input first name',
            'last_name.required' => 'Please input last name',
            'email.required' => 'Input a valid email',
            'phone.required' => 'Input a valid phone number with country code',
            'gender.required' => 'Select your gender',
            'country.required' => 'Select your country'
        ];
    }

}
