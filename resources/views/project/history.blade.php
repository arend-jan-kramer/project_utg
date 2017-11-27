@extends('template/nosidebar')

@section('body')
@if(!empty($projects))
  @foreach($projects as $project)
    {{$project->id}}
  @endforeach
@endif
@endsection
