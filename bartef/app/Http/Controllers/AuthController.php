<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AuthController extends Controller
{
    /**
     *  Login: Show the form of login
     *
     */
    public function login() {
      return view('login');
    }

    /**
     *  Check: Verify the password
     *
     */
    public function check(Request $request) {
      if (Auth::attempt(['password' => $request['password']]))
        return redirect('/welcome');
      return redirect('/login');
    }

    /**
     *  Logout: Logout the session of the user
     *
     */
    public function logout() {
      Auth::logout();
      return redirect('login');
    }
}
