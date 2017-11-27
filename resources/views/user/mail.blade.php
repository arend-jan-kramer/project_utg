@extends('template/base')

@section('body')
<div class="messages">
  <div class="message-header">
    <div class="row"><label>Title:</label>{{ $messagesfrom[0]->title }}</div>
    <div class="row"><label>From:</label>{{ $messagesfrom[0]->from->first_name }}</div>
    <div class="row"><label>Date:</label>{{ $messagesfrom[0]->created_at }}</div>
  </div>
  <div class="message-content">
    {{ $messagesfrom[0]->message }}
  </div>
  <div class="message-footer">
    
  </div>
</div>
@endsection

@section('sidebar_left')
<div id="sidebar" class="left">
	<ul class="sidebarMenu">
    <li><a href="#">Postvak in</a>
    <ul class="submenu postvak-in">
      @foreach($messagesfrom as $message)
        <li class="openmessage {{($message->status == 0) ? '' : 'read'}}">
          <a href="#" >
            <input type="text" class="hidden" value="{{$message->id}}">
          {{$message->title}}</a>
        </li>
      </li>
      @endforeach
    </ul>
    </li>
    <li><a href="#">Postvak uit</a>
    </li>
  </ul>
</div>
@endsection
