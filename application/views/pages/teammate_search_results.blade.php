@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}


  <h2 align="center">Teammate Search</h2>
  <ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">Plan Information</li>
    <li data-theme="d">
    <center><h4 style="white-space:normal">Interactive Design Protocol</h4></center>
    <center><h4>Professor Benjamin</h4></center>
    <div class="ui-grid-a">
        <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
        <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
    </div>  

    <div class="ui-grid-a">
      <div class="ui-block-a">
      <select name="select-h-4c" id="select-h-4c" data-mini="true"  data-theme="b" >
          <option value="">Term</option>
          <option value="small">2013 term 1</option>
          <option value="medium">2013 term 2</option>
          <option value="large">2013 term 3</option>
          </select>
      </div>
      <div class="ui-block-b">
          
      <a href="{{URL::to('learnmore');}}" data-transition="slide" data-mini="true" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
      </div>

    </div>
  </ul>


    {{Form::open('searchresult','get',array('data-transition'=>'slide'))}}
    <table style='width:106%'><tr>
        <td>
          <input id="searchinput1" placeholder="Teammate Search"  data-inline="true" value="" type="search" data-mini="true" data-theme='d'>
        </td>
        <td style='font-size:80%; '>
              <input type="submit" data-role="button" data-transition="slide"  data-inline="true" data-mini="true" data-iconpos="notext" data-icon="search"/>
        </td>
    </tr></table>
    {{Form::close()}}
    <ul data-role="listview" data-inset="true" >
      <li data-role="list-divider" data-theme="a">Teammate Search Results</li>
      <li data-theme="d">
      <div class="ui-grid-c">
        <div class="ui-block-a">
          <a href="{{URL::to('invite');}}"><img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon"></a>
          
          <h6 style="font-size:13px">Name</h6>
          <span style="float:right"><a href="#popupLogin" data-rel="popup" data-position-to="window"  data-transition="slide" data-role="button" data-inline="true" data-mini="true"><font color="green">Invite</font></a></span>
        </div>
      </div><!-- /grid-b -->
    </ul>

    <ul data-role="listview" data-inset="true" >
      <li data-role="list-divider" data-theme="a">4 Plans</li>
      <li data-theme="d">
      <div class="ui-grid-c">
        <div class="ui-block-a">
          <a href="{{URL::to('invite');}}"><img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon"></a>
          
          <h6 style="font-size:13px">Name</h6>
          <span style="float:right"><a href="#popupLogin" data-rel="popup" data-position-to="window"  data-transition="slide" data-role="button" data-inline="true" data-mini="true"><font color="green">Invite</font></a></span>
        </div>
        <div class="ui-block-b">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <span style="float:right"><a href="#popupLogin" data-rel="popup" data-position-to="window"  data-transition="slide" data-role="button" data-inline="true" data-mini="true"><font color="green">Invite</font></a></span>
        </div>
        <div class="ui-block-c">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
        </div>
        <div class="ui-block-d">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
        </div>  
      </div><!-- /grid-b -->
    </ul>

  




@endsection
