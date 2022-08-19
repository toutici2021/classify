<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:80'],
            'last_name' => ['required', 'string', 'max:80'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string'],
            'password' => ['required', 'min:6'],
            'terms_condition' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'This field is required',
            'last_name.required' => 'This field is required',
            'email.required' => 'This field is required',
            'address.required' => 'This field is required',
            'password.required' => 'This field is required',
            'terms_condition.required' => 'You have to check mark terms & condition checkbox'
        ];
    }
}
