<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Usertype;
use App\Message;

class userController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function profile() {
      $data = [
        'user' => User::where("id", Auth::user()->id)->first(),
        'category' => Category::orderBy('category', 'asc')->pluck('category', 'id'),
        'type' => Usertype::orderBy('user_type', 'asc')->pluck('user_type', 'id'),
      ];
      return view("user.profile")->with(compact('data'));
    }

    public function edit(Request $request) {
      User::where("id", Auth::user()->id)->update([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'userType_id' => $request->user_type,
      ]);
      return redirect()->back();
    }

    public function status() {
      return view("user.status");
    }

    public function mail() {
      $messagesfrom = Message::where('user_id', Auth::user()->id)
      ->orderby('id', 'desc')
      ->with('user', 'from')
      ->get();
      return view('user.mail')->with(compact('messagesfrom'));
    }
}
