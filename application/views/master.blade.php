<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-responsive.min.css') }}
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			{{ HTML::link('/', 'Pictures Uploads', array('class' => 'brand')) }}
			<ul class="nav pull-right">
				@if (Auth::user())
					<li>{{ HTML::link('logout', 'Logout') }}</li>
				@endif
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	@section('form-modals')
	@if (Auth::check())
		@include('plugins.upload_modal')
	@endif
	@yield_section
</body>
</html>