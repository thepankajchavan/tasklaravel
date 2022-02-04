<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFieldExecutive extends FormRequest
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
            'email' => 'required | string| email| max:255| unique:users,email,1',
            'password' => 'min:8',
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required|date',   // date format = dd-mm-yyyy
            'gender' => 'required|string|max:10',
            'annual_income'  => 'nullable',
            'family_type'  => 'nullable|string',
            'occupation'  => 'nullable|string'
        ];
    }
}
