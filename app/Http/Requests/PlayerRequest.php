<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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

            'name'     => 'required|unique:users,name,' .$this->id,
            'title'    => 'required',
            'email'    => 'required|email|unique:users,email,' .$this->id,
           
        ];
    }

    public function messages()
    {
        return [
            
            'name.required'     => 'The :attribute هذا الحقل مطلوب.',
            'name.unique'       => 'The :attribute هذا الاسم تم استخدامه مسبقا.',
            'title.required'    => 'The :attribute هذا الحقل مطلوب.',
            'email.required'    => 'The :attribute هذا الحقل مطلوب.',
            'email.unique'      => 'The :attribute هذا الاسم تم استخدامه مسبقا.',
            'email.email'       => 'The :attribute  يجب ان يكون البريد الالكتروني صالح .',
        ];
    }
}
