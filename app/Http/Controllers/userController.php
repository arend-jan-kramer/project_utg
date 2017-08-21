<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function registration() {
      return view('register.newUser');
    }

    function createUser() {
      return redirect()->back();
    }
}
