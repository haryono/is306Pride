@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
  <center><h2>Plan</h2></center>

  
<ul data-role="listview" data-inset="true">
  <li data-role="list-divider" data-theme="a">Student Information</li>
    <li data-theme="d">
    <br>
    <p><strong>Re: Dinner Tonight</strong></p>
    <p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
    <p><strong>4:48</strong>PM</p> 
    </li>
</ul>  

<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" align="center" >
    <select name="select-h-4c" id="select-h-4c" data-mini="true" data-theme="c">
        <option value="">Current Term (2013 Term 1)</option>
        <option value="small">2013 term 1</option>
        <option value="medium">2013 term 2</option>
        <option value="large">2013 term 3</option>
    </select>
</fieldset>

<ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">Enrolled</li>
    <li data-theme="d">
      <center><h4 style="white-space:normal">Enterprise Web Solution</h4></center>
      <center><h4>Professor KK</h4></center>
      <div class="ui-grid-a">
          <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
          <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
      </div>  

      <div class="ui-grid-a">
        <div class="ui-block-a">
        <button disabled="" data-mini="true" data-theme="b">2013 Term 1</button>
        </div>
        <div class="ui-block-b">
            
        <a href="{{URL::to('learnmore');}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
        </div>

      </div>
      <center><h4 style="white-space:normal">Team</h4></center>
      <div class="ui-grid-c">
        <div class="ui-block-a">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>
        <div class="ui-block-b">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>
        <div class="ui-block-c">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="orange" style="font-size:13px">Pending</font>
        </div>
        <div class="ui-block-d">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <span style="font-size:13px">Pending</span>
        </div>  
      </div>

      
</ul>    

<ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">Planned</li>
    <li data-theme="d">
      <center><h4 style="white-space:normal">Interactive Design Protocol</h4></center>
      <center><h4>Professor Benjamin</h4></center>
      <div class="ui-grid-a">
          <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
          <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
      </div>  

      <div class="ui-grid-a">
        <div class="ui-block-a">
        <button disabled="" data-mini="true" data-theme="b">2013 Term 1</button>
        </div>
        <div class="ui-block-b">
            
        <a href="{{URL::to('learnmore');}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
        </div>

      </div>

      <center><h4 style="white-space:normal">Team</h4></center>
      <div class="ui-grid-c">
        <div class="ui-block-a">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>
        <div class="ui-block-b">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>
        <div class="ui-block-c">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="orange" style="font-size:13px">Pending</font>
        </div>
        <div class="ui-block-d">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <span style="font-size:13px">Pending</span>
        </div>  
      </div>

      <div class="ui-grid-a">
          <div class="ui-block-a" style="width:0%">
          </div>
          <div class="ui-block-b" style="width:100%">
              <a href="{{URL::to('teamsearch');}}" data-role="button" data-mini="true" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Teammate Search</a>
          </div>
      </div>

      <div class="ui-grid-a">
        <div class="ui-block-a">
        <button style="background-color:red" data-icon="minus" data-mini="true">Delete</button>
        </div>
        <div class="ui-block-b">
        <a href="#" data-role="button" data-icon="check" data-theme="a" data-mini="true">Get the bid !</a>
        </div>

      </div>
    </li>
</ul>  

<ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">Planned</li>
    <li data-theme="d">
      <center><h4 style="white-space:normal">Interactive Design Protocol</h4></center>
      <center><h4>Professor Benjamin</h4></center>
      <div class="ui-grid-a">
          <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
          <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
      </div>  

      <div class="ui-grid-a">
        <div class="ui-block-a">
        <button disabled="" data-mini="true" data-theme="b">2013 Term 1</button>
        </div>
        <div class="ui-block-b">
            
        <a href="{{URL::to('learnmore');}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
        </div>

      </div>

      <center><h4 style="white-space:normal">Team</h4></center>

      <div class="ui-grid-c">
        <div class="ui-block-a">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>
        <div class="ui-block-b">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>
        <div class="ui-block-c">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>
        <div class="ui-block-d">
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
          <h6 style="font-size:13px">Name</h6>
          <font color="green" style="font-size:13px">Accepted</font>
        </div>  
      </div>
      <div class="ui-grid-a">
          <div class="ui-block-a" style="width:0%">
          </div>
          <div class="ui-block-b" style="width:100%">
              <a href="{{URL::to('teamsearch');}}" data-mini="true" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Teammate Search</a>
          </div>
      </div>

      <div class="ui-grid-a">
        <div class="ui-block-a">
        <button style="background-color:red" data-mini="true" data-icon="minus">Delete</button>
        </div>
        <div class="ui-block-b">
        <a href="#" data-role="button" data-icon="check" data-mini="true" data-theme="a">Get the bid !</a>
        </div>

      </div>
    </li>
</ul>  
    
@endsection
  