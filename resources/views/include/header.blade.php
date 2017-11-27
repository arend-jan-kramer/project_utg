<nav class="horizontal">
	<ul class="menu">
		<li class="{{ Request::path() == '/' ? 'active' : '' }}">
			<a href="/">Home</a>
			<ul class="submenu">
				<li><a href="https://www.youtube.com/watch?v=TeEsyhBZhUg" target="_blank">Laravel tut</a></li>
				<li><a href="http://tutorials.jenkov.com/svg/clip-path.html" target="_blank">SVG clipPath</a></li>
				<li><a href="https://www.youtube.com/watch?v=r-lTlLQo0E4" target="_blank">SVG animation</a></li>
			</ul>
		</li>
		<li class="right no-hover">
	    <a href="#" class="clock"></a>
		</li>
		@if(Auth::guest())
			<li class="{{ Request::path() == '/project' ? 'active' : '' }}">
				<a href="#">Project</a>
				<ul class="submenu">
					<li><a href="/project">Projecten</a></li>
				</ul>
			</li>
			<li class="right"><a href="/login">In loggen</a></li>
			<li class="right"><a href="/register">Registration</a></li>
		@else
			<li class="right">
				<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
						uit loggen
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
				</form>
			</li>
			<li class="right {{ Request::path() == '/profile/*' ? 'active' : '' }}">
				<div class="postvak"></div>
				<a href="#">Profiel</a>
				<ul class="submenu">
					<li><a href="/profile/mail">Mail</a></li>
					<li><a href="/profile/status">Status</a></li>
					<li><a href="/profile/user">Profiel</a></li>
				</ul>
			</li>
			<li class="right {{ Request::path() == '/company' ? 'active' : '' }}"><a href="#">Bedrijf</a>
				<ul class="submenu">
					<li><a href="#">Financieel</a></li>
				</ul>
			</li>
			<li class="{{ Request::path() == '/project/* ' ? 'active' : '' }}">
				<a href="#">Project</a>
				<ul class="submenu">
					<li><a href="/project/me">Mijn projecten</a></li>
					<li><a href="/project/new">Nieuw Project</a></li>
					<li><a href="/project/history">Oude projecten</a></li>
					<li><a href="/project">Overzicht projecten</a></li>
				</ul>
			</li>
		@endif
	</ul>
</nav>
