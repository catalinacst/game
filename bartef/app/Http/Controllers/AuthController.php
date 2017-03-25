<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Status;

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

    /**
     *  Generate: Return view
     *
     */
    public function generate() {
      $state = Status::find('1');
      return view('generate', compact('state'));
    }

    /**
     *  Store: Store the password and active the app
     *
     */
    public function store(Request $request) {
      $state = Status::find('1');
      $state->flag = 1;
      $state->password = Hash::make($request->newpass);
      $state->save();
      return redirect('/generate');
    }

    /**
     *  Refresh: Deactivate the app
     *
    */
    public function refresh(){
      $state = Status::find('1');
      $state->flag = 0;
      $state->save();
      return redirect('/generate');
    }
}
