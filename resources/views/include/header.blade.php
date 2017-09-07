<nav class="horizontal">
	<ul class="menu">
		<li>
			<a href="/">Home</a>
			<ul class="submenu">
				<li><a href="https://www.youtube.com/watch?v=TeEsyhBZhUg" target="_blank">Laravel tut</a></li>
				<li><a href="http://tutorials.jenkov.com/svg/clip-path.html" target="_blank">SVG clipPath</a></li>
				<li><a href="https://www.youtube.com/watch?v=r-lTlLQo0E4" target="_blank">SVG animation</a></li>
			</ul>
		</li>
		<li class="right"><a ref="#">profile</a></li>
		<li class="right"><a ref="#">status</a></li>
		@if(Auth::guest())
			<li>
				<a href="#">Project</a>
				<ul class="submenu">
					<li><a href="/project">{{ trans('translation.tr_000003') }}</a></li>
				</ul>
			</li>
			<li><a href="/register">Registration</a></li>
			<li><a href="/login">Login</a></li>
		@else
			<li>
				<a href="#">Project</a>
				<ul class="submenu">
					<li><a href="/project/me">{{ trans('translation.tr_000001') }}</a></li>
					<li><a href="/project/new">{{ trans('translation.tr_000002') }}</a></li>
					<li><a href="/project">{{ trans('translation.tr_000003') }}</a></li>
				</ul>
			</li>
			<li><a href="{{ route('logout') }}"
					onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();">
					Logout
			</a></li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
			</form>
		@endif
	</ul>
</nav>
