@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
<h2 align="center">Invitation</h2>
<?php $checkinvitation = 0;?>
@if(sizeof($invitations) != 0)
  <?php $checkinvitation = 1;?>
  @foreach($invitations as $invitation)
    <ul data-role="listview" data-inset="true" >
      <li data-role="list-divider" data-theme="a">Invitation</li>
      <li data-theme="d">
        <center><h4 style="white-space:normal">{{$invitation->name}}</h4></center>
        <center><h4>Professor {{$invitation->prof}}</h4></center>
        <?php $avgprice = DB::query('select avg(`bidprice`) as `avgprice` from `plans` where `course_id` = ?',array($invitation->course_id));?>
        <div class="ui-grid-a">
            <div class="ui-block-a"><input type="reset" value="e$ {{$avgprice[0]->avgprice}}" data-mini="true" data-theme="g"></div>
            <div class="ui-block-b"><input type="reset" value="{{$invitation->likecounts}} likes" data-mini="true" data-theme="g"></div>
        </div>  

        <div class="ui-grid-a">
          <div class="ui-block-a">
            <?php $plan = Auth::user()->plans()->where('course_id','=',$invitation->course_id)->get();?>
              @if($plan[0]->term == '201301')
              <button disabled="" data-mini="true" data-theme="e">2013 Term 1</button>
              @elseif($plan[0]->term == '201302')
                <button disabled="" data-mini="true" data-theme="e">2013 Term 2</button>
              @elseif($plan[0]->term == '201401')
                <button disabled="" data-mini="true" data-theme="e">2014 Term 1</button>
              @elseif($plan[0]->term == '201402')
                <button disabled="" data-mini="true" data-theme="e">2014 Term 2</button>
              @elseif($plan[0]->term == '201501')
                <button disabled="" data-mini="true" data-theme="e">2015 Term 1</button>
              @elseif($plan[0]->term == '201502')
                <button disabled="" data-mini="true" data-theme="e">2015 Term 2</button>
              @elseif($plan[0]->term == '201601')
                <button disabled="" data-mini="true" data-theme="e">2016 Term 1</button>
              @elseif($plan[0]->term == '201602')
                <button disabled="" data-mini="true" data-theme="e">2016 Term 2</button>
              @endif
          </div>

          <div class="ui-block-b">
            <a href="{{URL::to('learnmore/'.$invitation->course_id);}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
          </div>
        </div>

        <center><h4 style="white-space:normal">Team</h4></center>
        <?php $teammates = Plan::where('team_id','=',$invitation->team_id)->join('users','plans.user_id','=','users.id')->get();?>


        <div class="ui-grid-c">
          <?php $i = 1; ?>
          @foreach($teammates as $teammate)

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
                <center><h6 style="font-size:13px;margin-top: -5px;">{{$teammate->name}}</h6></center>
                <center><font color="#fbde48" size="2px">Accepted</font></center>
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


        <?php $pendingteammates = Invitation::where('course_id','=',$invitation->course_id)->where('team_id','=',$invitation->team_id)->where('receiver_id','!=',Auth::user()->id)->join('users','invitations.receiver_id','=','users.id')->get();?>
        <div class="ui-grid-c">
          <?php $i = 1; ?>
          @foreach($pendingteammates as $teammate)

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
                <center><h6 style="font-size:13px;margin-top: -5px;">{{$teammate->name}}</h6></center>
                <center><font size="2px">Pending</font>  </center>
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



        <div class="ui-grid-a">
          <div class="ui-block-a">
          <!--button href="#popupReject" style="background-color:red" data-icon="minus">Reject</button-->
            <?php $invitationid = Invitation::where('receiver_id','=',Auth::user()->id)->where('course_id','=',$invitation->course_id)->where('team_id','=',$invitation->team_id)->first()->id;?>
            <a href="{{URL::to('reject/'.$invitationid);}}" data-mini="true" data-transition="slide" data-role="button" data-icon="check" data-iconpos="left" >Reject</a>
          </div>
          <div class="ui-block-b">
            <a href="{{URL::to('accept/'.$invitationid);}}" data-mini="true" data-transition="slide" data-role="button" data-icon="check" data-theme="a" data-iconpos="left" >Accept</a>
          </div>
        </div>
      </li>
    </ul> 
  @endforeach
@else
  <!--Invitation size == 0-->
@endif

<ul data-role="listview" data-inset="true">
  @if(sizeof($myinvite) != 0)
    <?php $checkinvitation = 1;?>
    <li data-role="list-divider" data-theme="a">Pending Invitation</li>
    @foreach($myinvite as $minvite)
      <li>
        <img src="{{URL::to_asset('http://icons.iconarchive.com/icons/visualpharm/ios7v2/256/Users-Student-2-icon.png');}}" style="margin-top: 6px;">
        <h2>{{$minvite->username}}</h2>
        <p style="white-space:normal">{{$minvite->coursename}}</p>
        <p style="white-space:normal">{{$minvite->prof}}</p>
      </li>
    @endforeach
  @endif
</ul>
@if($checkinvitation == 0)
  <h3>No new invitation yet</h3>
@endif
<!--div data-role="popup" id="popupReject" >
  <form>
      <div style="padding:10px 40px;">
          <h4>Reject the Invitation?</h4>
          <div class="ui-grid-a" style="width:100%">
            <div class="ui-block-a"><button type="submit" data-theme="a" data-icon="check" data-mini="true">Yes</button></div>
            <div class="ui-block-b"><button type="submit" data-theme="a" data-icon="delete" data-mini="true" >No</button></div>
          </div>
      </div>
  </form>
</div-->
@endsection
