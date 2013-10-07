@layout('layouts.master2')
@section('content0')

        <style>
          .message {
              display: none;
              margin: 0 0 13px;
              padding: 10px;
              border: solid 1px #bd8; 
          }

          IMG.slides{
            height: 210px;
          }

          IMG.center {
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 70%
            }

          h5.title{
            text-align:center;
            color: #999999;
          }

      </style>

      <img src="http://www.lexingtonillinoisfort.org/Articles/2006/December/rope.gif" class="center">
      <h5 class="title">Your Rope to 4.3 in SMU Acedemic Life</h6>

      <!-- Header -->
      <div data-role="header" data-position="fixed">
        <h1>Rope To 4.3</h1>
        <a href="#" onclick="window.history.go(-1)" data-icon="arrow-l"  data-transition="slideup">cancel</a>
      </div>
      <!-- End Header -->
      <div data-role="content">
        {{ render('common.errors_display') }}

        {{ Form::open('register') }}
        <input type="text" id="username" class="span4" name="username" placeholder="Fullname" data-theme='d'>
        <input type="text" id="email" class="span4" name="email" placeholder="Email Address" data-theme='d'>
        <input type="password" id="password" class="span4" name="password" placeholder="Password" data-theme='d'>
        <input type="password" id="password_confirmation" class="span4" name="password_confirmation" placeholder="Repeat Password" data-theme='d'>
        {{ Form::submit('Register', array('data-role'=>'button', 'class' => 'btn','data-theme'=>'e' , 'data-transition'=>'slide', 'data-direction'=>'reverse')) }}
        {{ Form::close() }}
        </form> 
      </div>



@endsection