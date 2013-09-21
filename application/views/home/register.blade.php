@layout('master')

@section('content')

	<div class="span7 well">
		<h1>Perks of Registering!</h1>
		<ul>
			<li>Upload Pics</li>
			<li>Have Fun!</li>
		</ul>
	</div>
	<div class="span3 well">
		<legend>Please Register!</legend>
		{{ Form::open('register') }}
		{{ Form::text('username', '', array('placeholder' => 'Username')) }}
		{{ Form::text('email', '', array('placeholder' => 'Email')) }}
		{{ Form::password('password', array('placeholder' => 'Password')) }}
		{{ Form::submit('Register', array('class' => 'btn btn-warning')) }}
		{{ HTML::link('/', 'Cancel', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>



@endsection