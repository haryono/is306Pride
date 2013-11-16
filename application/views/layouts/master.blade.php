<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <title>RopeTo4.3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{ HTML::style('assets/jquery-mobile/jquery.mobile-1.3.1.css') }}
  
  <link rel="stylesheet" href="{{URL::to_asset('css/font-awesome.css');}}" />
  <link rel="stylesheet" href="{{URL::to_asset('assets/flex-slider/flexslider.css');}}">
  <link rel="stylesheet" href="{{URL::to_asset('css/rewrite.css');}}">

  <!--link rel="stylesheet" href="{{URL::to_asset('css/style.css');}}"-->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
  

  <script src="{{URL::to_asset('assets/flex-slider/jquery.flexslider-min.js');}}"></script>
  <script src="{{URL::to_asset('js/main.js');}}"></script>

  <link rel="shortcut icon" href="https://trello-attachments.s3.amazonaws.com/518d0ed38d09d6390d0098bb/52626a0b416654aa0f001547/9dad15e94b298f195c7ab5b417d6b5f4/4.3.png">
  <style type="text/css">
  .icon{
    width:90%;
  }

  .fb-comments, .fb-comments * {
            width:100% !important;
        }
  </style>
  
</head>
<body >

    <!-- Header -->
    <div data-role="header" data-position="fixed" >
      <a href="javascript:history.go(-1)" data-transition="slide"  data-direction="reverse" data-icon="arrow-l" rel="external">Back</a>
      <h1>Rope To 4.3</h1>
      <a href="{{URL::to('logout')}}"  data-transition="slideup" rel="external">Logout</a>
    </div>
    <!-- End Header -->
    <!-- Content Start -->
   <div data-role="content" align="center"style="max-width:400px; margin:0 auto;">
    @yield('content')
   </div>
    <!-- End Content -->
  
  <div data-role="footer"  data-position="fixed">
    <div data-role="navbar" >
      <ul>
          @if(Session::get('menu') == "search")
            <li><a href="{{URL::to('search')}}"  data-icon="search"  class="ui-btn-active">Search</a></li>
          @else
            <li><a href="{{URL::to('search')}}"  data-icon="search">Search</a></li>
          @endif

          @if(Session::get('menu') == "plan")
            <li><a href="{{URL::to('plan/'.Auth::user()->id)}}"  data-icon="grid"  class="ui-btn-active">Plan</a></li>
          @else
            <li><a href="{{URL::to('plan/'.Auth::user()->id)}}"  data-icon="grid">Plan</a></li>
          @endif

          @if(Session::get('menu') == "invitation")
            <li><a href="{{URL::to('teaminvite')}}" data-icon="check"  class="ui-btn-active">Invitation</a></li>
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