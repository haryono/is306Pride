@layout('layouts.master')
@section('content')

        <div class="row">
            <div class="span4 offset4 well">
              <h2>RopeTo4.3</h2>
              <form method="POST" action="" accept-charset="UTF-8">
              <input type="text" id="email" class="span4" name="email" placeholder="Email Address" data-theme='d'>
              <input type="password" id="password" class="span4" name="password" placeholder="Password" data-theme='d'>
              <input type="password" id="password" class="span4" name="password" placeholder="Repeat Password" data-theme='d'>

              {{ HTML::link('/', 'Register', array('data-role'=>'button', 'class' => 'btn','data-theme'=>'e' , 'data-transition'=>'slidedown')) }}
              </form>    
            </div>
          </div>

@endsection