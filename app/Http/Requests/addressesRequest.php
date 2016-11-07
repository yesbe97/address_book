<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addressesRequest extends FormRequest
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
            "first_name" => "required",
            "last_name" => "required",
            "street_name" => "required",
            "home_number" => "required|integer|max:9999",
            "phone_number" => "required|numeric|max:999999999",
        ];
    }
}
