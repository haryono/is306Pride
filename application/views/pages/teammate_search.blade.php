@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}


<h2 align="center">Teammate Search</h2>
<ul data-role="listview" data-inset="true" >
  <li data-role="list-divider" data-theme="a">Plan Information</li>
    <li data-theme="d">
      <center><h4 style="white-space:normal">{{$course->name}}</h4></center>
      <center><h4>Professor {{$course->prof}}</h4></center>
      <?php $avgprice = DB::query('select avg(`bidprice`) as `avgprice` from `plans` where `course_id` = ?',array($course->id));?>
      <div class="ui-grid-a">
          <div class="ui-block-a"><input type="reset" value='e$ {{number_format($avgprice[0]->avgprice, 2, '.', '')}}' data-mini="true" data-theme="g"></div>
          <div class="ui-block-b"><input type="reset" value='{{$course->likecounts}} likes' data-mini="true" data-theme="g"></div>
      </div>  

      <div class="ui-grid-a">
        <div class="ui-block-a">
          @if($selectedterm == '201301')
            <button disabled="" data-mini="true" data-theme="e">2013 Term 1</button>
          @elseif($selectedterm == '201302')
            <button disabled="" data-mini="true" data-theme="e">2013 Term 2</button>
          @elseif($selectedterm == '201401')
            <button disabled="" data-mini="true" data-theme="e">2014 Term 1</button>
          @elseif($selectedterm == '201402')
            <button disabled="" data-mini="true" data-theme="e">2014 Term 2</button>
          @elseif($selectedterm == '201501')
            <button disabled="" data-mini="true" data-theme="e">2015 Term 1</button>
          @elseif($selectedterm == '201502')
            <button disabled="" data-mini="true" data-theme="e">2015 Term 2</button>
          @elseif($selectedterm == '201601')
            <button disabled="" data-mini="true" data-theme="e">2016 Term 1</button>
          @elseif($selectedterm == '201602')
            <button disabled="" data-mini="true" data-theme="e">2016 Term 2</button>
          @endif
        </div>
        <div class="ui-block-b">
          <a href="{{URL::to('learnmore/'.$course->id);}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
        </div>
      </div>
    </li>
  </li>
</ul>
@if(sizeof($students) != 0)
  <!--sizeofstudents-->
  {{Form::open('teamsearchresults','get',array('data-transition'=>'slide'))}}
    <table style='width:106%'><tr>
        <td><input id="searchinput1" placeholder="Teammate Search"  data-inline="true" value="" type="search" data-mini="true" data-theme='d'></td>
        <td style='font-size:80%; '><input type="submit" data-role="button" data-transition="slide"  data-inline="true" data-mini="true" data-iconpos="notext" data-icon="search"/></td>
    </tr></table>
  {{Form::close()}}









  <ul data-role="listview" data-inset="true" >
    <li data-role="list-divider" data-theme="a">{{sizeof($students)}} Plans</li>
      <li data-theme="d">
        @if(sizeof($ownplan) == 0)
          <h3>You need to add this course to your plan before inviting any groupmate</h3>

              <div class="ui-grid-c">
                  <?php $i = 1; ?>
                  @foreach($students as $student)
                  <?php 
                    $r = $i % 4;
                    if($r == 1){
                      echo "<div class='ui-block-a'>";
                    }elseif ($r == 2) {
                      echo "<div class='ui-block-b'>";
                    }elseif ($r == 3) {
                      echo "<div class='ui-block-c'>";
                    }elseif ($r == 0) {
                      echo "<div class='ui-block-d'>";
                    }
                  ?>
                      <img src="{{URL::to_asset('http://icons.iconarchive.com/icons/visualpharm/ios7v2/256/Users-Student-2-icon.png');}}" style="width:100%">
                      <center><h6 style="font-size:13px;margin-top: -5px;">{{$student->name}}</h6></center>
                      <button disabled="" data-mini="true" data-theme="e">Invite</button>
                      </div>
                  <?php 
                    $i++;
                    if($r == 0){
                  ?>
                    </div>
                    <div class="ui-grid-c">
                  <?php
                    }
                  ?>
                  @endforeach
              </div>

        @else
          <?php $teamid = $ownplan[0]->team_id;?>

            <div class="ui-grid-c">
                <?php $i = 1; ?>
                @foreach($students as $student)
                <?php 
                  $r = $i % 4;
                  if($r == 1){
                    echo "<div class='ui-block-a'>";
                  }elseif ($r == 2) {
                    echo "<div class='ui-block-b'>";
                  }elseif ($r == 3) {
                    echo "<div class='ui-block-c'>";
                  }elseif ($r == 0) {
                    echo "<div class='ui-block-d'>";
                  }
                ?>
                    <img src="{{URL::to_asset('http://icons.iconarchive.com/icons/visualpharm/ios7v2/256/Users-Student-2-icon.png');}}" style="width:100%">
                    <center><h6 style="font-size:13px;margin-top: -5px;">{{$student->name}}</h6></center>

                    @if($student->user_id == $userid)

                      <button disabled="" data-mini="true" data-theme="e">It's me!</button>
                    @elseif($teamid != null && $student->team_id == $teamid)
                      <button disabled="" data-mini="true" data-theme="e"><font size="1px">Teamed</font>  </button>
                    @elseif(in_array($student->id, $checkinvite))
                      <button disabled="" data-mini="true" data-theme="e"><font size="1px">Pedding</font></button>
                    @elseif(in_array($student->id, $checksender))
                      <?php $invitationid = array_search($student->id,$checksender);?>
                      <a href="{{URL::to('accept/'.$invitationid);}}" data-mini="true" data-transition="slide" data-role="button" data-icon="check" data-theme="a" data-iconpos="left" >Accept</a>
                    @elseif($student->team_id == null)
                      <a href="{{URL::to('invite/'.$course->id.'/'.$student->id);}}" data-mini="true" data-transition="slide" data-role="button" data-theme="e">Invite</a>
                    @else
                      <button disabled="" data-mini="true" data-theme="e">Unavailable</button>
                    @endif
                    </div>
                <?php 
                  $i++;
                  if($r == 0){
                ?>
                  </div>
                  <div class="ui-grid-c">
                <?php
                  }
                ?>
                @endforeach
            </div>


        @endif
      </li>
    </li>
  </ul>
@else<!--Sizeof Students == 0 -->
  <h5><font color="red">There ain't anybody bid for this course yet</font></h5>
@endif




<div data-role="popup" id="popupLogin" >
  <form>
    <div style="padding:10px 40px;">
      <p>
        <h4 align="center">Invite a teammate</h4>
        <p> 
          <h5><b>Name:</b>&nbsp;&nbsp;Zhang Fan</h5>
          <h5><b>School:</b>&nbsp;&nbsp;Information System</h5>
          <h5>Term: 2013 term 1</h5>
        </p>
      </p>
      <div class="ui-grid-a" style="width:120%">
        <div class="ui-block-b"><button type="submit" data-mini="true" >Cancel</button></div>
        <div class="ui-block-a"><button type="submit" data-theme="a" data-mini="true">Submit</button></div>
        
      </div>
    </div>
  </form>
</div>  

@endsection
