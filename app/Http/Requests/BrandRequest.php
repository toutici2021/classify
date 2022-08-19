<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


/**
 * @property mixed brand_name
 * @property mixed brand_slug
 * @property mixed category_id
 * @property mixed product_count
 * Class BrandRequest
 * @package App\Http\Requests
 */
class BrandRequest extends FormRequest
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
            'brand_name' => 'required'
        ];
    }
}
