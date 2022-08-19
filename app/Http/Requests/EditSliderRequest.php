<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSliderRequest extends FormRequest
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
            'caption' => 'required',
            'media_name' => 'mimes:jpg,jpeg,png',
        ];
    }

    public function messages(): array
    {
        return [
            'caption.required' => 'Banner caption is required',
            'media_name.mimes' => 'Accepted file format: .jpg, .jpeg, .png'

        ];
    }
}
