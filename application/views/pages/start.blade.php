@layout('layouts.master2')
@section('content0')

        <img src="https://dl.dropboxusercontent.com/u/38440510/pride.png" width="100%">
        <h5 class="title" style="margin-bottom: -15px;margin-top: 20px;">Your Rope to 4.3 in SMU Academic Life</h6>
          <!-- Slider End -->

        <div data-role="content">
        {{ render('common.errors_display') }}
            {{Form::open('/')}}
            <input name="email" placeholder="Email Address" value="" type="text">
            <input name="password" placeholder="Password" value="" type="password">


            <input type="submit" value="Login" data-theme="a" data-transition='slide'>
            <a href="{{URL::to('register')}}" data-role="button" data-theme="c" data-transition='slide'>Not register? Click Here!</a>
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

  