@layout('master')

@section('content')

	<div class="span7 well">
		<h1>Pic Uploads</h1>
		<ul>
			<li>Learn!</li>
			<li>Create!</li>
			<li>Have Fun!</li>
		</ul>
	</div>
	<div class="span3 well">
		<legend>Please Sign In!</legend>
		{{ Form::open('/') }}
		{{ Form::text('email', '', array('placeholder' => 'Email')) }}
		{{ Form::password('password', array('placeholder' => 'Password')) }}
		{{ Form::submit('Sign In', array('class' => 'btn btn-success')) }}
		{{ HTML::link('register', 'Register', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>



@endsection
