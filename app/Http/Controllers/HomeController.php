<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
	{
		$userRole = Auth::user()->role;
		if($userRole == 'admin')
		{
			return redirect('/admin/dashboard');
		}
		else if($userRole == 'user')
		{
			return redirect('/user/dashboard');
		}
		else
		{
			return view('error_page');
		}
	}
}
