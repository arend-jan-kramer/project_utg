@php
$date = date('Y'); if($date != '2016') $date = '2016 - '.date('Y')
@endphp
<footer>
  <div class="max-width text-center">&copy; {{ $date }}</div>
</footer>
