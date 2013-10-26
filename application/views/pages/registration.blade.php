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
        <p class="register">Enrollment Year </p>
        <select name="enroll">
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
        </select>
        <p class="register">School</p>
        <select name="school">
          <option value="School of Information System" select="selected">School of Information System</option>
          <option value="School of Economics">School of Economics</option>
          <option value="School of Accountancy">School of Accountancy</option>
          <option value="School of Social Science">School of Social Science</option>
          <option value="School of Business">School of Business</option>
        </select>
        <br>
        {{ Form::submit('Register', array('data-role'=>'button', 'class' => 'btn','data-theme'=>'e' , 'data-transition'=>'slide', 'data-direction'=>'reverse')) }}
        {{ Form::close() }}
        </form> 
      </div>



@endsection