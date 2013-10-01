@layout('layouts.master')
@section('content')
  <center><h2>Learn More</h2></center>
<ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">Brief</li>
    <li data-theme="d">
    <h2>Interactive Design Protocol</h2>
    <p>Professor Benjamin
    <p>
    <fieldset class="ui-grid-a">
        <div class="ui-block-a"><input type="submit" value="3000 likes" data-mini="true"></div>
        <div class="ui-block-b"><input type="reset" value="e$ 80-90" data-mini="true"></div>
    </fieldset>
    </p>
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" align="right">
    <select name="select-h-4c" id="select-h-4c" data-mini="true" data-theme="b">
        <option value="">Select Term</option>
        <option value="small">2013 term 1</option>
        <option value="medium">2013 term 2</option>
        <option value="large">2013 term 3</option>
    </select>
    <a href="{{URL::to('plan');}}" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right">Add to Plan</a>
</fieldset>
    </li>
    <!--item 2-->
    <li data-role="list-divider" data-theme="a">Course Description</li>
    <li data-theme="d">
    <p style="white-space:normal"> => Learn how to design and prototype information systems that are useful, usable, and a pleasure to use.<br>
    </p>
    </a></li>
    <!--item 3-->
    <li data-role="list-divider" data-theme="a">Who add this to their plan?</li>
    <img src="{{URL::to_asset('gallerythumbs/1.jpg');}}" alt="images/1.jpg" title="this is a description"/>
    <img src="{{URL::to_asset('gallerythumbs/2.jpg');}}" alt="images/2.jpg" title="great!"/>
    <img src="{{URL::to_asset('gallerythumbs/4.jpg');}}" alt="images/4.jpg" title="Light!"/>
    <img src="{{URL::to_asset('gallerythumbs/5.jpg');}}" alt="images/5.jpg" title="... and another"/>
    <li data-theme="d">
    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <a href="{{URL::to('teamsearch');}}" data-role="button" data-icon="arrow-r" data-iconpos="right" >
    Teammate Search</a>
    </fieldset>
    </li>
    <!--item 4-->
    <li data-role="list-divider" data-theme="a">Professor</li>
    <li data-theme="d">
    <img src="{{URL::to_asset('gallerythumbs/default.png');}}">
    <h2>Professor title</h2>
    <p>Brief Introduction</p>
    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" class="ui-li-aside">
    <a href="#" data-role="button" data-icon="arrow-r" data-iconpos="right" >
    View CV</a>
    </fieldset>
    </li>
</ul>
    

<div class="ui-grid-a">
    <div class="ui-block-a" style="width:25%">
        <div class="ui-bar ui-bar-a" style="height:60px"><img src="{{URL::to_asset('gallerythumbs/2.jpg');}}" alt="images/2.jpg" title="great!"/></div></div>
    <div class="ui-block-b" style="width:75%"><div class="ui-bar ui-bar-a" style="height:60px">
         <div class="ui-block-b"><a href="index.html" data-role="button" data-inline="true" data-mini="true">Recommend</a></div>
         <div class="ui-block-b" data-mini="true"><a href="index.html" data-role="button" data-inline="true" data-mini="true">Add Comment</a></div>
    </div></div>
</div><!-- /grid-a -->
    
@endsection
  