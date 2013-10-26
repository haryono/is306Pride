@layout('layouts.master2')
@section('content0')
    <script>
        $(document).ready(function(){
            $(".message").fadeIn("200");
                $(".message").fadeOut(5000);
           
        });
    </script>

        <img src="http://www.youthwork-practice.com/programs-youth-group-meetings/group-meeting-pictures/rope-ladder.gif" class="center">
        <h5 class="title">Your Rope to 4.3 in SMU Academic Life</h6>
          <!-- Slider End -->

        <div data-role="content">
        {{ render('common.errors_display') }}
            {{Form::open('/')}}
            <input name="email"  placeholder="Email Address" value="" type="text" data-theme="d">
            <input name="password"  placeholder="Password" value="" type="password" data-theme="d">


            <input type="submit" value="Login" data-theme="a" data-transition='slide'>
            <a href="{{URL::to('register')}}" data-role="button" data-theme="e" data-transition='slide'>Not register? Click Here!</a>
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

  