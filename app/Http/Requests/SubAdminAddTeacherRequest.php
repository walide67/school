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
            'teacher_email' => 'required',
            'teacher_password' => 'required|min:8',
            'user_fname' => 'required',
            'user_lname' => 'required',
            'school_id' => 'required|numeric',
            'matter' => 'required',
        ];
    }
}
