<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>FF7DB @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
</head>
<body>
<header>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile"
						aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{route('characters')}}">FF7DB</a>
			</div>
			<div class="collapse navbar-collapse" id="mobile">
				<ul class="nav navbar-nav">
					<li><a href="{{route('characters')}}">@lang('main.characters')</a></li>
					<li><a href="{{route('secondaryCharacters')}}">@lang('main.secondaryCharacters')</a></li>
					<li><a href="{{route('enemies')}}">@lang('main.enemies')</a></li>
					<li><a href="{{route('materia')}}">@lang('main.materia')</a></li>
					<li><a href="{{route('weapons')}}">@lang('main.weapons')</a></li>
					<li><a href="{{route('songs')}}">@lang('main.songs')</a></li>
					<li><a href="{{route('items')}}">@lang('main.items')</a></li>
				</ul>
				<form class="navbar-form" method="get" action="{{route('changeLang')}}">
					<div class="form-group">
						<!--suppress HtmlFormInputWithoutLabel -->
						<select name="lang">
							<option value="es">Español/Spanish</option>
							<option value="en">English/Inglés</option>
						</select>
					</div>
					<input class="btn btn-default" type="submit">
				</form>
			</div>
		</div>
	</nav>
</header>
<main>
	@yield('content')
</main>
<footer>
	@yield('footer')
</footer>
</body>
</html>