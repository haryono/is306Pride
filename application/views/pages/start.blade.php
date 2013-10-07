@layout('layouts.master2')
@section('content0')
    <script>
        $(document).ready(function(){
            $(".message").fadeIn("200");
                $(".message").fadeOut(5000);
           
        });
    </script>
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
          <!-- Slider End -->

        <div data-role="content">
        {{ render('common.errors_display') }}
            {{Form::open('/')}}
            <input name="email"  placeholder="Email Address" value="" type="text" data-theme="d">
            <input name="password"  placeholder="Password" value="" type="text" data-theme="d">


            <input type="submit" value="Login" data-theme="a" data-transition='slide'>
            <a href="{{URL::to('register')}}" data-role="button" data-theme="e" data-transition='slide'>Not register? Click here to register </a>
            {{Form::close()}}
        </div>

        <br>
        
    
    <!-- Header -->
    </style>
    <div data-role="header" data-position="fixed">
      <h1>Rope To 4.3</h1>
    </div>
    <!-- End Header -->
    
  
@endsection

  