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
      $users = User::All();
      $categories = Category::All();
      $interests = array();
      for ($i = 0, $str = $users[0]->interests, $size = count($categories); $i < $size; $i++) {
        if ($str[$i] == '1')
          array_push($interests, $categories[$i]->name);
      }
      return view('home', compact('users', 'interests'));
    }

    /**
     *  Show profile user
     *
     */
    public function show($id) {
      $user = User::find($id);
      $categories = Category::All();
      $interests = array();
      for ($i = 0, $str = $user->interests, $size = count($categories); $i < $size; $i++) {
        if ($str[$i] == '1')
          array_push($interests, $categories[$i]->name);
      }
      return view('profile', compact('user', 'interests'));
    }
}
