<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Category;
use Carbon\carbon;

class projectController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index() {
      return view('project.index');
    }

    public function me() {
      // Mijn opdrachten
      $projects = Project::where('user_id', Auth::user()->id)->whereNotIn('status', [0,1])->with('user')->get();
      return view('project.me')->with(compact('projects'));
    }

    public function new() {
      // Het aanmaken van een opdracht
      $category = Category::orderBy('category', 'asc')->pluck('category', 'id');
      return view('project.new')->with(compact('category'));
    }

    public function create(Request $request) {
      // Het aanmaken van een opdracht
      Project::create([
        'title' => $request->title,
        'description' => $request->description,
        'author_id' => Auth::user()->id,
        'price' => $request->price,
        'category' => $request->category,
      ]);
      return redirect()->back();
    }

    public function update(Request $request) {
      // Iemand neemt de opdracht aan
      $project = Project::where("id", $request->id)->first();
      $edited = $project->projectedited.','.carbon::now();
      Project::where('id', $project->id)
      // ->update(['user_id' => Auth::user()->id]);
      ->update(['user_id' => Auth::user()->id, 'projectedited' => $edited]);
      return redirect()->back();
    }

    public function history() {
      // status 0 wordt door de klant gegeven als de klant er mee accoord gaat!!
      $projects = Project::where('user_id', Auth::user()->id)->whereNotIn('status', [1,2])->get();
      return view('project.history')->with(compact('projects'));
    }

    public function finish($nr){
      // Het project wordt verstuurd naar de klant voor goedkeuring
      Project::where('id', $nr)->update(['status' => 1]);
      return redirect()->back();
    }

    public function cancel($nr) {
      // De opdracht wordt niet uitgevoerd
      Project::where('id', $nr)->update(['user_id' => null, 'status' => 2]);
      return redirect()->back();
    }
}
