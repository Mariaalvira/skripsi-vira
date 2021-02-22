<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AkunController extends Controller
{
	use AuthenticatesUsers;

	protected $maxAttempts = 3;
	protected $decayMinutes = 2;

	public function __construct()
	{
		$this->middleware('guest:akun')->except('postLogout');
	}
	public function getLogin()
	{
		return view('auth.login');
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, ['email' => 'required|email',
			'password' => 'required|min:5'
		]);

		if (auth()->guard('akun')->attempt($request->only('email', 'password')))
		{
			$request->session()->regenerate();
			$this->clearLoginAttempts($request);
			return redirect()->intended();
		} else{
			$this->incrementLoginAttempts($request);

			return redirect()
			->back()
			->withInput()
			->withErrors(["Incorrect user login details!"]);
		}
	}

	public function postLogout()
	{
		auth()->guard('akun')->logout();
		session()->flush();

		return redirect()->route('admin.login');
	}
    //
}
