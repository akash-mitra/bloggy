<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	protected function user ()
	{
		$user = Auth::user();
		return view('profile.index', compact('user'));	
	}
}
