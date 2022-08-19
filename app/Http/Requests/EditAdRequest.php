<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAdRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'category' => 'required',
            'ad_title' => 'required',
            'ad_description' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'country' => 'required',
            'state' => 'required',
            'seller_name' => 'required',
            'seller_email' => 'required',
            'seller_phone' => 'required',
            'address' => 'required'
        ];
    }
}
