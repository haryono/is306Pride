@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
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
                <div class="ui-block-a"><button disabled="" data-mini="true" data-theme="e">2013 Term 1</button></div>
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
                <h4>Professor {{$prof->name}}</h4>
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

<?php $liked = Plan::where('user_id','=',Auth::user()->id)->where('course_id','=',$course->id)->get();?>
@if(sizeof($liked)!=0 && $liked[0]->liked == 0)
    <a href="{{URL::to('recommend/'.$course->id);}}" data-role="button" data-theme="e" >Like!</a>
@else
    <button disabled="" data-theme="e">Liked</button>
@endif

<ul data-role="listview" data-split-icon="check" data-split-theme="d" data-inset="true" style="margin-top: -7px;">
    <li data-role="list-divider" data-theme="a">Comments</li>

<!--FacebookComment-->
    <div class="fb-comments" data-href="http://pride-is306lab.rhcloud.com/index.php/learnmore/{{$course->id}}" data-colorscheme="light" data-numposts="5"></div>
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

<!--script>
$(".click").click(function (){
    x= $(this).val();
    var _url = $(location).attr('href');
    alert(x);    
    alert(_url);
    $.ajax({
          type:"POST",
          url:"http://localhost/pride/php/index.php/learnmore/recommend",
          data:{courseid:x}
        }).done(function(data){
            alert('success');
        })
 });
</script-->

@endsection
  