<div class="message-header">
    <div class="row"><label>Title:</label> {{ $message->title }}</div>
    <div class="row"><label>From:</label> {{ $message->from->first_name }}</div>
    <div class="row"><label>Date:</label> {{ $message->user->first_name }}</div>
  </div>
  <div class="message-content">
    {{ $message->message }}
  </div>
  <div class="message-footer">
    
  </div>