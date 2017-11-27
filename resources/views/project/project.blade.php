{{-- @empty($project->user_id) --}}
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
      <div class="projectContent">
        <div class="title">
          {{ trans('translation.tr_000006', ['title' => $project->title]) }}
        </div>
        <div class="description">
          {{ trans('translation.tr_000007', ['description' => $project->description]) }}
        </div>
        <div class="detail @isset($project->new_price) {!! 'line-throug' !!} @endisset" >
          {{ trans('translation.tr_000008', ['price' => $project->price]) }}
        </div>
        @isset($project->new_price)
          <div class="newPrice">
            {{ trans('translation.tr_000010', ['new_price' => $project->new_price]) }}
          </div>
        @endisset
        @if(!empty(Auth::user()->id))
          <div class="option">
            {{ Form::open(["url" => "project/to-me", "method" => "post"]) }}
            {{ Form::input('text', 'id', $project->id, ["class" => "hidden"]) }}
            {{ Form::submit("Accept job", ["class" => "btn accept"]) }}
            {{ Form::close() }}
          </div>
        @endif
      </div>
    </div>
{{-- @endempty --}}
@endforeach
