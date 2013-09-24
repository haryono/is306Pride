@layout('layouts.default')
@section('content')

        <div class="row">
            <div class="span4 offset4 well">
              <legend>Rope24.3</legend>
              <form method="POST" action="" accept-charset="UTF-8">
              <input type="text" id="username" class="span4" name="username" placeholder="Username">
              <input type="password" id="password" class="span4" name="password" placeholder="Password">
              <input type="password" id="password" class="span4" name="password" placeholder="Repeat Password">
              {{ HTML::link('/', 'Register', array('class' => 'btn')) }}
              </form>    
            </div>
          </div>

@endsection