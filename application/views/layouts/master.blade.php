<!DOCTYPE html>
<html>
<head>
  <title>RopeTo4.3</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{ HTML::style('assets/jquery-mobile/jquery.mobile-1.3.1.css') }}
  
  <link rel="stylesheet" href="{{URL::to_asset('css/font-awesome.css');}}" />
  <link rel="stylesheet" href="{{URL::to_asset('assets/flex-slider/flexslider.css');}}">

  <!--link rel="stylesheet" href="{{URL::to_asset('css/style.css');}}"-->


  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
  

  <script src="{{URL::to_asset('assets/flex-slider/jquery.flexslider-min.js');}}"></script>
  <script src="{{URL::to_asset('js/main.js');}}"></script>
</head>
<body>

    <!-- Header -->
    <div data-role="header" data-position="fixed">
      <a href="{{URL::to('search')}}" data-icon="home" data-transition="pop">Home</a>
      <h1>RopeTo4.3</h1>
      <a href="{{URL::to('/')}}"  data-icon="grid" data-transition="slideup">Logout</a>
    </div>
    <!-- End Header -->
    <!-- Content Start -->
   <div data-role="content">
    @yield('content')
   </div>
    <!-- End Content -->
  
  <div data-role="footer"  data-position="fixed"  >
    <div data-role="navbar">
      <ul>
        @if(Session::get('menu') == "search")
          <li><a href="{{URL::to('search')}}"  data-icon="search" class="ui-btn-active ui-state-persist">Search</a></li>
        @else
          <li><a href="{{URL::to('search')}}"  data-icon="search">Search</a></li>
        @endif
        @if(Session::get('menu') == "plan")
          <li><a href="{{URL::to('plan')}}"  data-icon="plus" class="ui-btn-active ui-state-persist">Plan</a></li>
        @else
          <li><a href="{{URL::to('plan')}}"  data-icon="plus">Plan</a></li>
        @endif
        @if(Session::get('menu') == "team")
          <li><a href="{{URL::to('teamsearch')}}"  data-icon="check" class="ui-btn-active ui-state-persist">Team</a></li>
        @else
          <li><a href="{{URL::to('teamsearch')}}" data-icon="check">Team</a></li>
        @endif
      </ul>
    </div>
  </div>

</body>
</html>