<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultRequest extends FormRequest
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

            'round_id' => 'required',
            'user_id'  => 'required',
            'points'   => 'required|numeric',
            'neg'      => 'required|numeric',
            
        ];
    }

    public function messages()
    {
        return [
            
            'round_id.required' => 'The :attribute هذا الحقل مطلوب.',
            'user_id.required'  => 'The :attribute هذا الحقل مطلوب.',
            'points.required'   => 'The :attribute هذا الحقل مطلوب.',
            'neg.required'      => 'The :attribute هذا الحقل مطلوب.',
            'points.numeric'    => 'The :attribute يجب ادخال رقم.',
            'neg.numeric'       => 'The :attribute يجب ادخال رقم.',
        ];
    }
}
