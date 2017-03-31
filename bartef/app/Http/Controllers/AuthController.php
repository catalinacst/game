<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Status;
use App\User;
use App\Object;

class AuthController extends Controller
{
    /**
     *  Inded: Redirect to login
     *
     */
    public function index() {
      return redirect('/login');
    }

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
      if (Auth::attempt(['password' => $request['password']]) and Status::find('1')->flag == 1)
        return redirect('/introduction');
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
    public function refresh() {
      // Deactivate flag
      $state = Status::find('1');
      $state->flag = 0;
      $state->save();
      // Refresh interests
      $user = User::find('1');
      $user->name = 'default';
      $user->interests()->detach();
      $user->save();
      // Refresh objects
      $array = array(1, 4, 4, 5, 4, 6, 5, 1, 4, 2, 6, 1, 2, 2, 5, 8, 4,
                     3, 2, 6, 7, 5, 6, 3, 4, 6, 3, 2, 1, 3, 4, 7, 3, 6,
                     7, 2, 1, 2, 5, 9, 1, 6, 6, 4, 6, 7, 5, 8, 5, 6, 4,
                     6, 1, 7, 6, 8, 2, 2, 1, 5, 5, 6, 8, 9, 4, 1, 2, 5,
                     7, 7, 1, 9);
      foreach ($array as $key => $value) {
        $obj = Object::find($key + 1);
        $obj->user_id = $value;
        $obj->save();
      }
      return redirect('/generate');
    }
}
