@extends('template/base')

@section('body')
@if(!empty($projects))
  @foreach($projects as $project)
    {{$project->id}}
  @endforeach
@endif
@endsection
