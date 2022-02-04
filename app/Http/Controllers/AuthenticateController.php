<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFieldExecutive;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    public function register_field_executive(RegisterFieldExecutive $request){
        $validated = $request->validated();
        $baseUrl = url('/');
        $user = User::create([
            'name' => $validated['fname'] . ' ' .$validated['lname'],
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'dob' => $validated['dob'],
            'gender' => $validated['gender'],
            'annual_income' => $validated['annual_income'],
            'family_type' => $validated['family_type'],
            'occupation' => $validated['occupation'],
            'role' => 'user',
        ]);

        if($user){
            Auth::login($user);
            return redirect('/home');
        }
    }
}
