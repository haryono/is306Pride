@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
  <center><h2>Learn More</h2></center>
<ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">Brief information</li>
    <li data-theme="d">
    <center><h4 style="white-space:normal">Interactive Design Protocol</h4></center>
    <center><h4>Professor Benjamin</h4></center>
    <div class="ui-grid-a">
        <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
        <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
    </div>  
    <div class="ui-grid-a">
        <div class="ui-block-a">
        <select name="select-h-4c" id="select-h-4c"  data-mini="true"   data-theme="b">
            <option value="">Term</option>
            <option value="small">2013 term 1</option>
            <option value="medium">2013 term 2</option>
            <option value="large">2013 term 3</option>
            </select>
        </div>
        <div class="ui-block-b">
            
        <a href="{{URL::to('plan');}}" data-transition="slide" data-mini="true" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right">Add to Plan</a></div>
    </div>

    </li>
    <!--item 2-->
    <li data-role="list-divider" data-theme="a">Course Description</li>
    <li data-theme="d">
    <br>    
    <p style="white-space:normal">Learn how to design and prototype information systems that are useful, usable, and a pleasure to use. 
    </p>
    <p style="white-space:normal">Learn how to design and prototype information systems that are useful, usable, and a pleasure to use. 
    </p>
    </li>
    <!--item 3-->
    <li data-role="list-divider" data-theme="a">Who add this to their plan?</li>
    
    <li data-theme="d">
    <div class="ui-grid-c">
        <div class="ui-block-a">
            <img src="{{URL::to_asset('gallerythumbs/1.jpg');}}" title="this is a description"/>
        </div>
        <div class="ui-block-b">
            <img src="{{URL::to_asset('gallerythumbs/4.jpg');}}" title="Light!"/>
        </div>
        <div class="ui-block-b">
            <img src="{{URL::to_asset('gallerythumbs/5.jpg');}}" title="... and another"/>
        </div>
    </div>
    
   
    
    <div class="ui-grid-a">
        <div class="ui-block-a" style="width:0%">
        </div>
        <div class="ui-block-b" style="width:100%">
            <a href="{{URL::to('teamsearch');}}" data-role="button" data-mini="true" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Teammate Search</a>
        </div>
    </div>
    
        
    
    </li>
    <!--item 4-->
    <li data-role="list-divider" data-theme="a">Professor</li>
    <li data-theme="d">
    <div class="ui-grid-a">
        <div class="ui-block-a" style="width:30%">
            <img src="{{URL::to_asset('gallerythumbs/default.png');}}">
        </div>
        <div class="ui-block-b" style="width:70%">
            <h4>Professor title</h4>
            <p style="white-space:normal">Brief Introduction Brief Introduction Brief Introduction Brief Introduction Brief Introduction Brief Introduction </p>
        </div>
    </div>

    
    
    <div class="ui-grid-a">
        <div class="ui-block-a" style="width:0%">
        </div>
        <div class="ui-block-b" style="width:100%">
            <a href="#" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="e" data-mini="true">View CV</a>
        </div>
    </div>
    </li>
</ul>
    


<ul data-role="listview" data-inset="true" >
        <li data-role="list-divider" data-theme="a">My Comment</li>
        <div class="ui-grid-a" >
            <div class="ui-block-a" style="width:28%">
                <img src="{{URL::to_asset('gallerythumbs/2.jpg');}}" width="100%" />
            </div>
            <div class="ui-block-b" style="width:62%">
                <a href="index.html" data-role="button" data-inline="true" data-mini="true">Recommend</a>
                 <a href="#popupComment" data-rel="popup" data-position-to="window"  data-transition="slide" data-role="button" data-inline="true" data-mini="true">Add Comment</a>
            </div>
        </div>
        
        <!-- pop up box -->
        <div data-role="popup" id="popupComment" >
            <form>
                <div style="padding:10px 20px;">
                    <h3>Add Comments</h3>
                    <label for="un" class="ui-hidden-accessible">Title:</label>
                    <input type="text" name="title" id="un" value="" placeholder="Title .." data-theme="e" >
                    <label for="pw" class="ui-hidden-accessible">Comments:</label>
                    <textarea cols="20" rows="8" name="comments" id="textarea" placeholder="Comments.." data-theme="e"></textarea>
                    <button type="submit" data-theme="a" data-icon="check">Submit</button>
                </div>
            </form>
        </div>    
        <!--end of pop up box-->

</ul>
<ul data-role="listview" data-split-icon="check" data-split-theme="d" data-inset="true">
    <li data-role="list-divider" data-theme="a">Comments</li>

    <li><a href="#">
        <img src="{{URL::to_asset('gallerythumbs/default.png');}}" width="100%">
    <h2>Student Name</h2>
    <p>Broken Bells</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
    <li><a href="#">
        <img src="{{URL::to_asset('gallerythumbs/default.png');}}" width="100%">
    <h2>Student Name</h2>
    <p>Hot Chip</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
    <li><a href="#">
        <img src="{{URL::to_asset('gallerythumbs/default.png');}}" width="100%">
    <h2>Student Name</h2>
    <p>Phoenix</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
</ul>
    


@endsection
  