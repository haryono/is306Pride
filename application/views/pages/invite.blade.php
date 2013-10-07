@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
  <style type="text/css" media="screen">
    .icon{
      height:80px;
      width:80px;

    }
  </style>

  <style type="text/css" media="screen">
    .ui-field-contain{
      height:80px;
      width:280px;


    }
  </style>


  <h2 align="center">Invite</h2>
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
        <button disabled=""  data-theme="b">2013 Term 2</button>
        </div>
        <div class="ui-block-b">
            
        <a href="{{URL::to('learnmore');}}" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
        </div>
      </div>
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
            <h6>FU YU</h6>
            <h6>Info</h6>
          </div>
          <div class="ui-block-b">
            <div class="ui-field-contain">
                <!--<label for="submit-5"></label>-->
                <br><br>
                <button type="submit" id="submit-5">Send Invitation</button>
            </div>
          </div>
        </div>
    </ul>


  


@endsection