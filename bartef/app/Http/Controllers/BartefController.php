<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\User;

class BartefController extends Controller
{
    /**
     *  Redirect to welcome
     *
     */
    public function index() {
      return redirect('welcome');
    }

    /**
     *  Display form username and interests
     *
     */
    public function welcome() {
      $categories = Category::All();
      return view('welcome', compact('categories'));
    }

    /**
     *  Store the username and interests, then redirect to home
     *
     */
    public function store(Request $request) {
      // Store username
      $user = User::find('1');
      $user->name = $request['username'];
      // Store interests
      $user->interests()->detach();
      $numCategories = Category::All()->count();
      for ($i = 0; $i < $numCategories; $i++)
        if ($request['category'.$i] == 'on')
          $user->interests()->attach($i+1);
      return redirect('home');
    }

    /**
     *  Home
     *
     */
    public function home() {
      $users = User::All();
      return view('home', compact('users'));
    }

    /**
     *  Show profile user
     *
     */
    public function show($id) {
      $user = User::find($id);
      return view('profile', compact('user'));
    }

    /**
     *  Interface barter
     *
     */
    public function barter($id) {
      $from = User::find('1');
      $to = User::find($id);
      return view('barter', compact('from', 'to'));
    }

    /**
     *  Interface barter
     *
     */
    public function interests($id) {

      $me = User::find('1');
      $meObjects = $me->objects;
      $meInterests = $me->interests;

      $other = User::find($id);
      $otherObject = $other->objects;
      $otherInterests = $other->interests;

      return response()->json([
        $meObjects->toArray(),
        $meInterests->toArray(),
        $otherObject->toArray(),
        $otherInterests->toArray()
      ]);
    }

}
