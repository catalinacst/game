<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Http\Requests;
use App\Category;
use App\User;
use App\Object;

class BartefController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    /**
     *  Introduction: Show the introduction information
     *
     */
    public function introduction() {
      return view('introduction');
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
      Session::flash('message', 'Intercambio realizado correctamente.');
      return redirect('show/1');
    }

    /**
     *  Reset the initial objects
     *
    */
    public function reset(){
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
      Session::flash('message', 'Se reiniciaron los objetos correctamente.');
      return redirect('/show/1');
    }

    /**
     *  Feedback: Logout and reditect to the feedback
     *
    */
    public function feedback(){
      Auth::logout();
      return redirect('https://goo.gl/forms/Fo5EaXyfEPkiEDrJ3');
    }

}
