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
  <style type="text/css">
  .icon{
    width:90%;
  }
  </style>
  
</head>
<body>

    <!-- Header -->
    <div data-role="header" data-position="fixed" >
      <a href="javascript:history.go(-1)" data-transition="slide"  data-direction="reverse" data-icon="arrow-l">Back</a>
      <h1>Rope To 4.3</h1>
      <a href="{{URL::to('logout')}}"  data-transition="slideup">Logout</a>
    </div>
    <!-- End Header -->
    <!-- Content Start -->
   <div data-role="content" align="center"style="max-width:400px; margin:0 auto;">
    @yield('content')
   </div>
    <!-- End Content -->
  
  <div data-role="footer"  data-position="fixed"  >
    <div data-role="navbar" >
      <ul>
        @if(Session::get('menu') == "search")
          <li><a href="{{URL::to('search')}}"  data-icon="search" class="ui-btn-active ui-state-persist">Search</a></li>
        @else
          <li><a href="{{URL::to('search')}}"  data-icon="search">Search</a></li>
        @endif
        @if(Session::get('menu') == "plan")
          <li><a href="{{URL::to('plan')}}"  data-icon="grid" class="ui-btn-active ui-state-persist">Plan</a></li>
        @else
          <li><a href="{{URL::to('plan')}}"  data-icon="grid">Plan</a></li>
        @endif
        @if(Session::get('menu') == "invitation")
          <li><a href="{{URL::to('teaminvite')}}"  data-icon="check" class="ui-btn-active ui-state-persist">Invitation</a></li>
        @else
          <li><a href="{{URL::to('teaminvite')}}" data-icon="check">Invitation</a></li>
        @endif
      </ul>
    </div>
  </div>

<!--Notification pop-->
<script type="text/javascript" language="JavaScript">
    $(":jqmData(role='page'):last").on("pageshow", function(event) {
      $("#popupMsg", $(this)).popup("open");
    });
</script>
</body>
</html>