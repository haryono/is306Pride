@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
<!-- Remove Auto wrap on words -->
<style>
    .ui-btn-text {
    white-space: normal;
    }
    .ui-li-desc {
    white-space: normal;
    }
</style>
<!--facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=611013632284517";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<center><h2>Learn More</h2></center>
<ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">Brief information</li>
    <li data-theme="d">
    <center><h4 style="white-space:normal">{{$course->name}}</h4></center>
    <center><h4>Professor {{$prof->name}}</h4></center>
    <div class="ui-grid-a">
        <!--price and likes better to put it inside div rather than in the value-->
        <div class="ui-block-a"><input type="reset" value='e$ {{number_format($avgprice, 2, '.', '')}}' data-mini="true" data-theme="g"></div>
        <div class="ui-block-b"><input type="reset" value='{{$course->likecounts}} likes' data-mini="true" data-theme="g"></div>
    </div>  
    {{Form::open('addtoplan','POST')}}
        <div class="ui-grid-a">
            @if(sizeof($planned) == 0)
                <div class="ui-block-a">
                    <select name="term" id="select-h-4c"  data-mini="true"   data-theme="e">
                        <option value="201301" selected>2013 Term 1</option>
                        <option value="201302">2013 Term 2</option>
                        <option value="201403">2014 Term 1</option>
                        <option value="201404">2014 Term 2</option>
                    </select>
                </div> 
                <div class="ui-block-b">
                    <button data-transition="slide" data-mini="true" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" type="submit">Add to Plan</button>
                </div>
            @else
                @if($planned[0]->term == '201301')
                    <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2013 Term 1</button></div>
                @elseif($planned[0]->term == '201302')
                    <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2013 Term 2</button></div>
                @elseif($planned[0]->term == '201401')
                    <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2014 Term 1</button></div>
                @elseif($planned[0]->term == '201402')
                    <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2014 Term 2</button></div>
                @elseif($planned[0]->term == '201501')
                    <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2015 Term 1</button></div>
                @elseif($planned[0]->term == '201502')
                    <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2015 Term 2</button></div>
                @else
                    <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2013 Term 1</button></div>
                @endif
                    <div class="ui-block-b"><button disabled="" data-mini="true" data-theme="e">Added</button></div>
            @endif
        </div>
    {{Form::hidden('courseid',$course->id)}}
    {{Form::close()}}
    </li>
    <!--item 2-->
    <li data-role="list-divider" data-theme="a">Course Description</li>
    <li data-theme="d">
        <br><p style="white-space:normal">{{$course->description}}</p>
    </li>
    <!--item 3-->
    <li data-role="list-divider" data-theme="a">Search students who have this in their plan</li>
    <li data-theme="d">
        <div class="ui-grid-c">
            <div class="ui-block-a">
                <img class="img-circle" src="{{URL::to_asset('gallerythumbs/1.jpg');}}" title="this is a description"/>
            </div>
            <div class="ui-block-b">
                <img class="img-circle" src="{{URL::to_asset('gallerythumbs/4.jpg');}}" title="Light!"/>
            </div>
            <div class="ui-block-c">
                <img class="img-circle" src="{{URL::to_asset('gallerythumbs/5.jpg');}}" title="... and another"/>
            </div>
        </div>
        
        {{Form::open('teamsearch','POST')}}
        {{Form::hidden('courseid',$course->id)}}
        <fieldset class="ui-grid-a"> 
            <div class="ui-block-a">
                <select name="searchterm" data-theme="e" data-mini="true">
                    <option value="201301" selected>2013 Term 1</option>
                    <option value="201302">2013 Term 2</option>
                    <option value="201401">2014 Term 1</option>
                    <option value="201402">2014 Term 2</option>
                    <option value="201501">2015 Term 1</option>
                    <option value="201502">2015 Term 2</option>
                    <option value="201601">2016 Term 1</option>
                    <option value="201602">2016 Term 2</option>
                </select>
            </div> 
            <div class="ui-block-b"><input type="submit" value="Search" data-theme="e" data-icon="arrow-r" data-mini="true" data-iconpos="right"></div> 
        </fieldset> 
        {{Form::close()}}
    </li>
    <!--item 4-->
    <li data-role="list-divider" data-theme="a">Professor</li>
    <li data-theme="d">
        <div class="ui-grid-a">
            <div class="ui-block-a" style="width:30%">
                <img class="img-circle" src="{{URL::to_asset('gallerythumbs/default.png');}}">
            </div>
            <div class="ui-block-b" style="width:70%">
                <h4 style ="white-space: normal;">Professor {{$prof->name}}</h4>
                <p style="white-space:normal">{{$prof->description}}</p>
            </div>
        </div>
        <fieldset class="ui-grid-a">
            <div class="ui-block-a">
            </div>
            <div class="ui-block-b">
                @if($prof->cv_url != null)
                    <a href={{$prof->cv_url}} data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="e" data-mini="true">View CV</a>
                @else
                    <a href="#" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="e" data-mini="true">View CV</a>
                @endif
            </div>
        </fieldset>
    </li>
</ul>

<?php $liked = Plan::where('user_id','=',Auth::user()->id)->where('course_id','=',$course->id)->where('enrolled','=',1)->get();?>
@if(sizeof($liked)!=0 && $liked[0]->liked == 0)
    <a href="{{URL::to('recommend/'.$course->id);}}" data-role="button" data-theme="e" rel="external">Like!</a>
@elseif(sizeof($liked) == 0)
    <button disabled="" data-theme="e">Like</button>
@else
    <button disabled="" data-theme="e">Liked</button>
@endif

<ul data-role="listview" data-split-icon="check" data-split-theme="d" data-inset="true" style="margin-top: -7px;">
    <li data-role="list-divider" data-theme="a">Comments</li>
    <div  data-mini="true" ><a href="#popupLogin" data-rel="popup" data-position-to="window"  data-transition="slide" data-role="button" data-mini="true">Add a comment</a></div>

    <div data-role="content">
        <ul id="list" class="touch" data-role="listview" data-icon="false" data-split-icon="delete">
            @foreach($comments as $comment)
                <li>
                    <a href="#demo-mail" data-theme="a">
                        <h3>{{$comment->user_name}}</h3>
                        <p>{{$comment->message}}</p>
                        <p class="ui-li-aside">{{$comment->created_at}}</p>
                    </a>
                    <!--a href="#" class="delete" data-theme="a">Delete</a-->
                </li>
            @endforeach
        </ul>
    </div><!-- /content -->
    <div id="confirm" class="ui-content" data-role="popup" data-theme="a">
        <p id="question">Are you sure you want to delete:</p>
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a id="yes" data-role="button" data-mini="true" data-shadow="false" data-theme="a" data-rel="back">Yes</a>
            </div>
            <div class="ui-block-b">
                <a id="cancel" data-role="button" data-mini="true" data-shadow="false" data-theme="a" data-rel="back">Cancel</a>
            </div>
        </div>
    </div><!-- /popup -->
</div>








<!--FacebookComment-->
    <!--div class="fb-comments" data-href="http://pride-is306lab.rhcloud.com/index.php/learnmore/{{$course->id}}" data-colorscheme="light" data-numposts="5"></div-->
<!--FacebookComment-->

   <!--@foreach($comments as $comment)
        <li>
        <a href="#">
        <img src="{{URL::to_asset('gallerythumbs/default.png');}}" width="100%">
    <h2>{{$comment->user_name}}</h2>
    <p>{{$comment->message}}</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
    @endforeach--> 
</ul>

<!-- pop up box -->
<div data-role="popup" id="popupLogin" >
    {{Form::open('addcomment','POST',array('data-ajax'=>'false'))}}
        <div style="padding:10px 30px;">
            <h3>Add Comments</h3>
            <label for="un" class="ui-hidden-accessible">Title:</label>
            <label for="pw" class="ui-hidden-accessiable">Comments:</label>
            <textarea cols="30" rows="8" name="comment" id="textarea" placeholder="Comments.." data-theme="e"></textarea>
            <label >Would you like to hide your name?</label><br />
            <select name="anonymous" id="flip-6" data-role="slider" data-mini="true">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <input type="hidden" name="courseid" value='{{$course->id}}' />
            <button type="submit" data-theme="a" data-icon="check">Submit</button>
        </div>
    {{Form::close()}}
</div>    
<!--end of pop up box-->

@endsection
  