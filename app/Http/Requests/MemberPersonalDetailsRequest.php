<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberPersonalDetailsRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255'],
            'address' => ['required', 'string'],
            'phone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'last name is required',
            'email.required' => 'A valid email address is required',
            'address.required' => 'Your address is required',
            'phone.required' => 'Input your phone number'
        ];
    }
}
