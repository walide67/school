<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubAdminAddTeacherRequest extends FormRequest
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
            'identify' => 'required',
            'password' => 'required|min:8',
            'first_name' => 'required',
            'last_name' => 'required',
            'school_id' => 'required|numeric',
            'matter_id' => 'required',
            'photo' => '',
        ];
    }
}
