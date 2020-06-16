<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSubAdminRequest extends FormRequest
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
            'email' => 'required',
            'phone_num' => 'required',
            'school_name' => 'required',
            'password' => 'required',
            'wilaya' => 'required',
            'commune' => 'required',
            'school_pic' => 'required|image',
        ];
    }
}
