@extends('template/base')

@section('page-title')
| Project
@endsection

@section('content_title')
  <h1>Projecten overzicht</h1>
@endsection

@section('body')
  <div class="projects me">
  @foreach($projects as $project)
    <div class="project">
      <div class="projectHeader">
        <div class="projectNumber">
          {{ trans('translation.tr_000004', ['id' => sprintf("%07s", $project->id)]) }}
        </div>
        <div class="projectDate">
          {{ trans('translation.tr_000009', ['created_at' => $project->created_at->format('d-m-Y H:i')]) }}
        </div>
      </div>
      <div class="projectContent hidden">
        <div class="title">
          {{ trans('translation.tr_000006', ['title' => $project->title]) }}
        </div>
        <div class="description">
          {{ trans('translation.tr_000007', ['description' => $project->description]) }}
        </div>
        {{ Form::open(['url' => "/project/".$project->id."/finish", "class" => "form form-layout"]) }}
        {{ Form::file('files') }}
        {{ Form::textarea('message', null, ["placeholder" => "message"]) }}
        {{ Form::submit('Afronden', ["class" => 'button']) }}
        {{ Form::close() }}

        {{ Form::open(['url' => "/project/".$project->id."/cancel", "class" => "form form-layout"]) }}
        {{ Form::textarea('message', null, ["placeholder" => "reason"]) }}
        {{ Form::submit('Annuleren', ["class" => 'button']) }}
        {{ Form::close() }}
      </div>
    </div>
  @endforeach
</div>
@endsection