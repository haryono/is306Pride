@layout('layouts.default')
@section('content')

    <br>
    <br>
    <div class="row">
        <div class="span4 offset4 well">
          <legend>Rope24.3</legend>
          {{ Form::open('/') }}
          <input type="text" id="username" class="span4" name="username" placeholder="Username">
          <input type="password" id="password" class="span4" name="password" placeholder="Password">
          <button type="submit" name="submit" class="btn btn-info">Sign in</button>
          {{ HTML::link('register', 'Register', array('class' => 'btn')) }}
          {{ Form::close() }}
        </div>
      </div>

@endsection
  