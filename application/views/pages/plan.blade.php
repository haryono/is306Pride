@layout('layouts.master')
@section('content')
  <center><h2>Plan</h2></center>
<ul data-role="listview" data-inset="true">
  <li data-role="list-divider" data-theme="e">Student Information <span class="ui-li-count">1</span></li>
    <li><a href="index.html">
    <h2>Avery Walker</h2>
    <p><strong>Re: Dinner Tonight</strong></p>
    <p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
        <p class="ui-li-aside"><strong>4:48</strong>PM</p>
    </a></li>
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
      <h2>IDP</h2>
      <p>Professor Benjamin
      <p><fieldset class="ui-grid-a">
      <div class="ui-block-a"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
      <div class="ui-block-b"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
      </fieldset></p>
      <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" align="right" class="ui-li-aside">
          <a href="{{URL::to('learnmore');}}" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="b" data-iconpos="right" >Learn more</a>
      </fieldset>
      <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
        <button disabled="">Team:</button><button>IS306</button><a href="{{URL::to('teamsearch');}}" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Find Team</a>
      </fieldset>
      <fieldset>
        <img src="{{URL::to_asset('gallerythumbs/default.png');}}" alt="images/1.jpg" title="this is a description"/>
        <img src="{{URL::to_asset('gallerythumbs/default.png');}}" alt="images/2.jpg" title="great!"/>
      </fieldset>
      <fieldset>Haryono&nbsp;&nbsp;&nbsp;Fu yu</fieldset>
      <fieldset><font color="green">Accepted</font>&nbsp;<font color="green">Accepted</font></fieldset>
    </li>
    
<div data-role="collapsible-set" data-theme="a" data-content-theme="d">
    <div data-role="collapsible" align="left">
        <h2>Term 2</h2>
        <li data-theme="d">
        &nbsp;
        <h2>IS480</h2>
        <p>Professor Coldstone</p>
        <p><fieldset class="ui-grid-a">
        <div class="ui-block-a"><input type="reset" value="200 likes" data-mini="true" data-theme="g"></div>
        <div class="ui-block-b"><input type="reset" value="e$ 10-10" data-mini="true" data-theme="g"></div>
        </fieldset></p>
        <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" align="right" class="ui-li-aside">
            <a href="{{URL::to('learnmore');}}" data-role="button" data-icon="arrow-r" data-theme="b" data-transition="slide" data-iconpos="right" >Learn more</a>
        </fieldset>
        <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
          <button disabled="">Team:</button><button>IS306</button><a href="{{URL::to('teamsearch');}}" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" data-transition="slide">Find Team</a>
        </fieldset>
        <fieldset>
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" alt="images/1.jpg" title="this is a description"/>
          <img src="{{URL::to_asset('gallerythumbs/default.png');}}" alt="images/2.jpg" title="great!"/>
        </fieldset>
        <fieldset>Haryono&nbsp;&nbsp;&nbsp;Fu yu</fieldset>
        <fieldset><font color="green">Accepted</font>&nbsp;<font color="grey">Pending</font></fieldset>
        <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" align="right">
          <button style="background-color:red" data-icon="minus">Delete</button><a href="#" data-role="button" data-icon="check" data-theme="a">Get the bid !</a>
        </fieldset>
      </li>
    </div>
    <div data-role="collapsible" data-theme="d" data-content-theme="a">
        <h3>Term 3</h3>
        <p>Content</p>
    </div>
    <div data-role="collapsible">
        <h3>Term 4</h3>
        <p>Content</p>
    </div>
</div>    
</ul>
    
    
@endsection
  