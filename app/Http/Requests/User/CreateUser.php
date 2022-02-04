<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'company_name' => 'required | string',
            'company_description' => 'required | string',
            'contact_person_name' => 'nullable',
            'email' => 'required | email| max:255| unique:users,email,1',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
            'user_type' => 'required',
            'state' => 'required',
            'city' => 'required',
            'dob' => 'required|date',   // date format = dd-mm-yyyy
            'gender' => 'required|string|max:15',
            'pincode' => 'required|min:6|numeric',
            'mobile' => 'required|min:10|unique:user_profiles,mobile',
            'pan_card' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
