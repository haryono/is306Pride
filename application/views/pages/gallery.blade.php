<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Wonderwall</title>
        <!-- gallery -->
  <style type="text/css" media="screen">@import "{{URL::to_asset('jqtouch/jqtouch.min.css');}}";
  </style>
  <style type="text/css" media="screen">@import "{{URL::to_asset('themes/theme.css');}}";</style>
  <script src="{{URL::to_asset('jqtouch/jqtouch.min.js');}}" type="application/x-javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
      var jQT = new $.jQTouch({
        icon      : 'codropsIcon.png',
        cacheGetRequests: true,
        addGlossToIcon  : false,
        startupScreen : 'codropsSplash.png',
        statusBar   : 'black',
        preloadImages : [
          '{{URL::to_asset("themes/img/back_button.png");}}',
          '{{URL::to_asset("themes/img/back_button_clicked.png");}}',
          '{{URL::to_asset("themes/img/button_clicked.png");}}',
          '{{URL::to_asset("themes/img/grayButton.png");}}',
          '{{URL::to_asset("themes/img/whiteButton.png");}}',
          '{{URL::to_asset("themes/img/loading.gif");}}'
          ]
      }); 
        </script>
    <script src="{{URL::to_asset('jquery.gallery.js');}}" type="application/x-javascript" charset="utf-8"></script>
    <style type="text/css" media="screen">
            #about {
                padding: 100px 10px 40px;
                text-shadow: rgba(255, 255, 255, 0.3) 0px -1px 0;
                font-size: 13px;
                text-align: center;
                background: #161618;
            }
            #about p {
                margin-bottom: 8px;
            }
            #about a {
                color: #fff;
                font-weight: bold;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
		<div id="about" class="selectable">
			<p><img src="codropsIcon.png"/></p>
			<p>
                <strong>Wonderwall Image Gallery</strong>
                <a href="http://www.codrops.com">By Codrops</a>
			</p>
            <p>A web app created with <br /> <strong>jQTouch</strong></p>
			<p><br /><br /><a href="#" class="grayButton goback">Close</a></p>
        </div>
		<!-- The list of images (thumbs) -->
		<div id="thumbs_container" class="current">
            <div class="toolbar">
                <h1>Thumbs</h1>
                <a class="button slideup" id="infoButton" href="#about">About</a>
            </div>
			<div class="loader" style="display:none;"></div>
			<ul id="thumbs" class="thumbView" style="display:none;">
				<li class="pic"><a href="#photo_container"><img src="thumbs/1.jpg" alt="images/1.jpg" title="this is a description"/></a></li>
				<li class="pic"><a href="#photo_container"><img src="thumbs/2.jpg" alt="images/2.jpg" title="great!"/></a></li>
				<li class="pic"><a href="#photo_container"><img src="thumbs/3.jpg" alt="images/3.jpg" title="... and another"/></a></li>
				<li class="pic"><a href="#photo_container"><img src="thumbs/4.jpg" alt="images/4.jpg" title="Light!"/></a></li>
				<li class="pic"><a href="#photo_container"><img src="thumbs/5.jpg" alt="images/5.jpg" title="... and another"/></a></li>
			</ul>
        </div>
		<!-- The single image container -->
		<div id="photo_container">
            <div class="toolbar">
                <h1>Photo</h1>
                <a class="back" href="#thumbs_container">Photos</a>
				<a class="button slideup" id="infoButton" href="#about">About</a>
            </div>
			<div class="loader" style="display:none;"></div>
			<div id="theimage" class="singleimage"></div>
			<div class="descriptionWrapper">
				<p id="description"></p>
				<div id="prev" style="display:none;"></div>
				<div id="next" style="display:none;"></div>
			</div>	
        </div>
    </body>
</html>