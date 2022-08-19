<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed title
 * @property mixed post_content
 * @property mixed slug
 * @property mixed feature_image
 * @property mixed type
 * @property mixed status
 * Class StoreContentRequest
 * @package App\Http\Requests
 */
class StoreContentRequest extends FormRequest
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
            'title' => 'required',
            'post_content' => 'required'
        ];
    }
}
