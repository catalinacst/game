<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\User;
use App\Object;

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
      $itl = 0;
      $itr = 0;
      return view('barter', compact('from', 'to', 'itl', 'itr'));
    }

    /**
     *  Petition AJAX return JSON: myObjects, myInterests
     *                             theirObject, theirInterests
     *
     */
    public function interests($id) {

      $me = User::find('1');
      $myObjects = $me->objects;
      $myInterests = $me->interests;

      $other = User::find($id);
      $theirObject = $other->objects;
      $theirInterests = $other->interests;

      return response()->json([
        $myObjects->toArray(),
        $myInterests->toArray(),
        $theirObject->toArray(),
        $theirInterests->toArray()
      ]);
    }

    /**
     *  Exchange: Update ids in the objects
     *
     */
    public function exchange(Request $request, $id) {
      $arr = $request->all();
      foreach ($arr as $key => $value) {
        $object = Object::find($value);
        $object->user_id = ($key[0] == 'l') ? $id : '1';
        $object->save();
      }
      return redirect('show/'.$id);
    }
}
