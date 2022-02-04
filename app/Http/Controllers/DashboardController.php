<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin_dashboard(){
        $users = User::where('role','user')->get();
        return view('users', compact('users'));
    }
    public function user_dashboard(){
        $gender = auth()->user()->gender;
        if($gender=='Male')
            $gender = 'Female';
        else
            $gender = 'Male';
        $users = User::where('role','user')->where('gender',$gender)->get();
        return view('user.dashboard',compact('users'));
    }
}
