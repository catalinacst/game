<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BartefController extends Controller
{
    /**
     *  Display form welcome
     *
     */
    public function index() {
      return redirect('welcome');
    }

    /**
     *  Display form welcome
     *
     */
    public function welcome() {
      return view('welcome');
    }
}
