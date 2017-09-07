<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Category;

class projectController extends Controller
{
    public function index() {
      $projects = Project::get();
      return view('project.index')->with(compact('projects'));
    }

    public function me() {
      $projects = Project::where('user_id', Auth::user()->id)->get();
      return view('project.me')->with(compact('projects'));
    }

    public function new() {
      $category = Category::orderBy('category', 'asc')->pluck('category', 'id');
      return view('project.new')->with(compact('category'));
    }

    public function newproject() {
      Project::create([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'author_id' => Auth::user()->id,
        'price' => $_POST['price'],
        'category' => $_POST['category'],
      ]);
      return redirect()->back();
    }
}
