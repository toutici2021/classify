<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StateRequest
 * @package App\Http\Requests
 * @property mixed state_name
 * @property mixed country_id
 */
class StateRequest extends FormRequest
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
            'state_name' => 'required',
            'country_id' => 'required'
        ];
    }
}
