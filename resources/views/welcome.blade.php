@extends('base')

@section('body')
<div id="content" class="max-width">
	<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500"><path fill="none" stroke="#000" stroke-width="3" stroke-miterlimit="10" d="M50 47h406v406H50z"/><path class="square" fill="none" stroke="#000" stroke-width="3" stroke-miterlimit="10" d="M99 93h135v135H99z"/><circle fill="none" stroke="#000" stroke-width="3" stroke-miterlimit="10" cx="363" cy="160.5" r="67"/><path fill="none" stroke="#000" stroke-width="3" stroke-miterlimit="10" d="M85.955 428.254l80.545-139.51 80.545 139.51z"/><path fill="none" stroke="#000" stroke-width="3" stroke-miterlimit="10" d="M314 422l123-123M314 297l123 123"/></svg>
</div>
<<script>
	var shape = document.querySelector('.square');
	var shapeLength = shape.getTotalLength();
	console.log('length of the shape',shapeLength);
</script>
@endsection

