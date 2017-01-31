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
      $user->save();
      // Store interests
      
      return redirect('home');
    }

    /**
     *  Home
     *
     */
    public function home() {
      return 'home';
    }
}
