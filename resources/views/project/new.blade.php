@extends('template/nosidebar')

@section('body')
  {{ Form::open(['url' => 'project/new', "class" => "form form-layout"]) }}
  {{ Form::input('text', 'title', null, ["placeholder" => "Title"]) }}
  {{ Form::textarea('description', null, ["placeholder" => "Description"]) }}
  {{ Form::input('number', 'price', null, ["placeholder" => "Price"]) }}
  {{ Form::select('category', $category, null, ["placeholder" => "select category", "required"]) }}
  {{ Form::submit('Create', ["class" => 'button']) }}
  {{ Form::close() }}
@endsection
