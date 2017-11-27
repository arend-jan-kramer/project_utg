<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Message;

class callsController extends Controller
{
    public function __construct() {
      // $this->middleware('auth');
    }
    
    public function countMessages() {
      $messages = Message::where('status', 1)->where('user_id', Auth::user()->id)->count();
      if($messages != 0) {
        return $messages;
      }
    }

    public function getProjects() {
      if(!empty(Auth::user())) {
        $projects = Project::where('user_id', null)
          ->where('category', Auth::user()->userType_id)
          ->with('user')
          ->get();
      } else {
        $projects = Project::where('user_id', null)
        ->with('user')
        ->get();
      }
        // dd($projects);
      // dd(Auth::user()->userType_id);
      return view('project.project')->with(compact('projects'));
    }

    public function getMessageId($id) {
      $message = Message::where('id', $id)
      ->orderby('id','desc')->with('user', 'from')->first();
      if($message->status != 0){
        $message->status = 0;
        $message->save();
      }
      return view('request.message')->with(compact('message'));
    }
}
