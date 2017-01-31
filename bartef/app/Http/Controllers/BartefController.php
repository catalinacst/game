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
      $numCategories = Category::All()->count();
      $interests = '';
      for ($i = 0; $i < $numCategories; $i++)
        $interests .= ($request['category'.$i] == 'on') ? '1' : '0';
      $user->interests = $interests;
      // Save changes
      $user->save();
      return redirect('home');
    }

    /**
     *  Home
     *
     */
    public function home() {
      return view('home');
    }
}
