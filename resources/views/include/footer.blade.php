@php
$date = date('Y'); if($date != '2016') $date = '2016 - '.date('Y')
@endphp
<footer class="text-center">
    &copy; Up to Go {{ $date }}
</footer>
