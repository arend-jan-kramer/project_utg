<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class projectController extends Controller
{
    public function index() {
      $projects = DB::table('projects')->get();
      return view('project.index')->with(compact('projects'));
    }
}
