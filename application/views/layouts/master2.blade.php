<!DOCTYPE html>
<html>
<head>
  <title>RopeTo4.3</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{ HTML::style('assets/jquery-mobile/jquery.mobile-1.3.1.css') }}
  
  <link rel="stylesheet" href="{{URL::to_asset('css/font-awesome.css');}}" />
  <link rel="stylesheet" href="{{URL::to_asset('assets/flex-slider/flexslider.css');}}">



  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
  

  <script src="{{URL::to_asset('assets/flex-slider/jquery.flexslider-min.js');}}"></script>
  <script src="{{URL::to_asset('js/main.js');}}"></script>

  
</head>
<body>

     <!-- Content Start -->
    <div data-role="content" align="center"style="max-width:400px; margin:0 auto;">
     @yield('content0')
    </div>
     <!-- End Content -->
  
<!--Notification pop-->
<script type="text/javascript" language="JavaScript">
    $(":jqmData(role='page'):last").on("pageshow", function(event) {
      $("#popupMsg", $(this)).popup("open");
    });
</script>

</body>
</html>

  