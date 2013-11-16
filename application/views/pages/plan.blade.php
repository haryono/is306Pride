@layout('layouts.master')
@section('content')
  <center><h2>Plan</h2></center>

  
<ul data-role="listview" data-inset="true">
  <li data-role="list-divider" data-theme="a">Student Information</li>
    <li data-theme="d">
    <br>
    <p><strong>Name : </strong>{{$user->name}}</p>
    <p><strong>Enrollment Year : </strong>{{$user->enroll}}</p>
    <p><strong>Faculty : </strong>{{$user->school}}</p>
        <div class="ui-grid-a">
        <div class="ui-block-a"></div>
        <div class="ui-block-b">@if(Auth::user()->id == $user->id)
            <a class="edit" data-rel="popup" data-mini="true" data-position-to="window"  data-transition="slide" data-role="button" data-icon="edit"  icon-mini="true" data-theme="a" data-role="button" >Edit</a>
          @endif</div>
          
        </div>
    </li>
</ul>  

 



<?php $checkplans = 0;?>


    <ul data-role="listview" data-filter-placeholder="Professor name/ course ID or Title" data-filter="true"  data-inset="true" data-mini="true" data-theme="d" data-filter-reveal="false">
      @if(sizeof($enrolledplans) != 0)
        <?php $checkplans = 1;?>
        @foreach($enrolledplans as $enrolled)
        <?php $avgprice = DB::query('select avg(`bidprice`) as `avgprice` from `plans` where `course_id` = ?',array($enrolled->courseid));?>
        <li data-role="list-divider" data-theme="e">Enrolled</li>
          <li data-theme="d">
            <center><h4 style="white-space:normal">{{$enrolled->coursename}}</h4></center>
            <center><p>Professor {{$enrolled->prof}}</p></center>

            <div class="ui-grid-a">
              <div class="ui-block-a"><input type="reset" value='e$ {{number_format($avgprice[0]->avgprice, 2, '.', '')}}' data-mini="true" data-theme="g"></div>
              <div class="ui-block-b"><input type="reset" value='{{$enrolled->likecounts}} likes' data-mini="true" data-theme="g"></div>
            </div>  

            <div class="ui-grid-a">
              <div class="ui-block-a">
                @if($enrolled->term == '201301')
                  <button disabled="" data-mini="true" data-theme="e">2013 Term 1</button>
                @elseif($enrolled->term == '201302')
                  <button disabled="" data-mini="true" data-theme="e">2013 Term 2</button>
                @elseif($enrolled->term == '201401')
                  <button disabled="" data-mini="true" data-theme="e">2014 Term 1</button>
                @elseif($enrolled->term == '201402')
                  <button disabled="" data-mini="true" data-theme="e">2014 Term 2</button>
                @elseif($enrolled->term == '201501')
                  <button disabled="" data-mini="true" data-theme="e">2015 Term 1</button>
                @elseif($enrolled->term == '201502')
                  <button disabled="" data-mini="true" data-theme="e">2015 Term 2</button>
                @elseif($enrolled->term == '201601')
                  <button disabled="" data-mini="true" data-theme="e">2016 Term 1</button>
                @elseif($enrolled->term == '201602')
                  <button disabled="" data-mini="true" data-theme="e">2016 Term 2</button>
                @endif
              </div>
              <div class="ui-block-b">
                <a href="{{URL::to('learnmore/'.$enrolled->courseid);}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right"  rel="external" >Learn more</a>
              </div>
              <div class="ui-block-d">
                <a href="{{URL::to('deletefromplan/'.$enrolled->planid);}}" data-role="button" data-mini="true" data-icon="minus" data-iconpos="right" >Remove</a>
              </div>
            </div>


            <center><h4 style="white-space:normal">Team</h4></center>
          @if($enrolled->team_id != null)
            <?php $teammates = Plan::where('course_id','=',$enrolled->courseid)->where('team_id','=',$enrolled->team_id)->join('users','plans.user_id','=','users.id')->get()?>
            
              <div class="ui-grid-c">
                <table><tr>
                  <?php $i = 1;?>
                  @foreach($teammates as $teammate)
                      <td>
                      <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                      <h6 style="font-size:13px">{{$teammate->name}}</h6>Accepted</td>
                      @if($i > 4)
                      </tr><tr>
                      <?php $i = 1;?>
                      @else
                        <?php $i++;?>
                      @endif
                  @endforeach
                  <?php $pendingteammates = Invitation::where('course_id','=',$enrolled->courseid)->where('team_id','=',$enrolled->team_id)->where('receiver_id','!=',Auth::user()->id)->join('users','invitations.receiver_id','=','users.id')->get();?>
                  @foreach($pendingteammates as $teammate)
                    <td>
                      <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                      <h6 style="font-size:13px">{{$teammate->name}}</h6>
                      Pending
                    </td>
                     @if($i > 4)
                      </tr><tr>
                      <?php $i = 1;?>
                      @else
                        <?php $i++;?>
                      @endif
                  @endforeach
                </tr></table>
              </div>
          @endif
        </li>
        @endforeach
      @endif

      @if(sizeof($notenrolledplans) != 0)
        <?php $checkplans = 1;?>
        <li data-role="list-divider" data-theme="a">Planned</li>
        @foreach($notenrolledplans as $notenrolled)
         <?php $avgprice = DB::query('select avg(`bidprice`) as `avgprice` from `plans` where `course_id` = ?',array($notenrolled->courseid));?>
          <li data-theme="d">
            <center><h4 style="white-space:normal">{{$notenrolled->coursename}}</h4></center>
            <center><p>Professor {{$notenrolled->prof}}</p></center>

            <div class="ui-grid-a">
                <div class="ui-block-a"><input type="reset" value='e$ {{number_format($avgprice[0]->avgprice, 2, '.', '')}}' data-mini="true" data-theme="g"></div>
                <div class="ui-block-b"><input type="reset" value='{{$notenrolled->likecounts}} likes' data-mini="true" data-theme="g"></div>
            </div>  

            <div class="ui-grid-a">
              <div class="ui-block-a">
                  @if($notenrolled->term == '201301')
                    <button disabled="" data-mini="true" data-theme="e">2013 Term 1</button>
                  @elseif($notenrolled->term == '201302')
                    <button disabled="" data-mini="true" data-theme="e">2013 Term 2</button>
                  @elseif($notenrolled->term == '201401')
                    <button disabled="" data-mini="true" data-theme="e">2014 Term 1</button>
                  @elseif($notenrolled->term == '201402')
                    <button disabled="" data-mini="true" data-theme="e">2014 Term 2</button>
                  @elseif($notenrolled->term == '201501')
                    <button disabled="" data-mini="true" data-theme="e">2015 Term 1</button>
                  @elseif($notenrolled->term == '201502')
                    <button disabled="" data-mini="true" data-theme="e">2015 Term 2</button>
                  @elseif($notenrolled->term == '201601')
                    <button disabled="" data-mini="true" data-theme="e">2016 Term 1</button>
                  @elseif($notenrolled->term == '201602')
                    <button disabled="" data-mini="true" data-theme="e">2016 Term 2</button>
                  @endif
              </div>
              <div class="ui-block-b">
                <a href="{{URL::to('learnmore/'.$notenrolled->courseid);}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right"  rel="external">Learn more</a>
              </div>
            </div> 
            <center><h4 style="white-space:normal">Team</h4></center>
            @if($notenrolled->team_id != null)
              <?php $teammates = Plan::where('course_id','=',$notenrolled->courseid)->where('team_id','=',$notenrolled->team_id)->join('users','plans.user_id','=','users.id')->get()?>
              
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

                <div class="ui-grid-c">
                    <?php $i = 1; ?>
                    <?php $pendingteammates = Invitation::where('course_id','=',$notenrolled->courseid)->where('team_id','=',$notenrolled->team_id)->where('receiver_id','!=',Auth::user()->id)->join('users','invitations.receiver_id','=','users.id')->get();?>
                    @foreach($pendingteammates as $pteammates)

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
                          <center><h6 style="font-size:13px;margin-top: -5px;">{{$pteammates->name}}</h6></center>
                          <center><font size="2px">Pending</font> </center>
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
            {{Form::open('teamsearch','POST')}}
            {{Form::hidden('courseid',$notenrolled->courseid)}}
            {{Form::hidden('searchterm',$notenrolled->term)}}
            <div class="ui-grid-solo" style="margin-top: 15PX;">
                <div class="ui-block-a"><input type="submit" value="Teammate Search" data-mini="true" data-icon="arrow-r" data-theme="e" data-iconpos="right"></div>
                
                
            </div>
            {{Form::close()}}
            <div class="ui-grid-a">
              <div class="ui-block-a">
                <a href="{{URL::to('deletefromplan/'.$notenrolled->planid);}}" data-role="button" data-mini="true" data-icon="minus"  data-iconpos="right" >Remove</a>
              </div>
              <div class="ui-block-b">
                <button href="#popupGetBid" data-icon="check" data-mini="true" data-theme="a" type='button' data-iconpos="right" class="click btn btn-small btn-block" value={{$notenrolled->planid}}>Enrolled</button>
              </div>
            </div>
          </li>
        @endforeach
      @endif
      </ul>


@if($checkplans == 0)
  <br>
  <h2>Sorry, no plan is added...</h2>
@endif 








<div data-role="popup" id="editpopup" class="editpopup">
  {{Form::open('edituser','POST')}}
    <div style="width: 250px;
margin: 10px 30px;">
        <!--<p style="color:red" data-mini="true">Please submit the bid only when your bidding is successful!</p>-->
        <!--<div class="ui-field-contain">-->
      <p class="plan-p">Name : </p>
      <input type="text" name="name" id="textinput-1" placeholder="" value="{{$user->name}}"  data-mini="true">
      <p class="plan-p">Enrolled Year:</p>
      <select name="enroll" data-mini="true">
        @if($user->enroll == "2010")
          <option  value="2010" selected="selected">2010</option>
        @else
          <option value="2010">2010</option>
        @endif
        @if($user->enroll == "2011")
          <option  value="2011" selected="selected">2011</option>
        @else
          <option value="2011">2011</option>
        @endif
        @if($user->enroll == "2012")
          <option  value="2012" selected="selected">2012</option>
        @else
          <option value="2012">2012</option>
        @endif
        @if($user->enroll == "2013")
          <option  value="2013" selected="selected">2013</option>
        @else
          <option value="2013">2013</option>
        @endif
      </select>
      <p class="plan-p">Faculty : </p>
      <select name="school" data-mini="true">
        @if($user->school == null)
          <option value="School of Information System" selected="selected">School of Information System</option>
          <option value="School of Economics">School of Economics</option>
          <option value="School of Accountancy">School of Accountancy</option>
          <option value="School of Business">School of Business</option>
          <option value="School of Social Science">School of Social Science</option>
        @else
          @if($user->school == "School of Information System")
            <option value="School of Information System" selected="selected">School of Information System</option>
          @else
            <option value="School of Information System">School of Information System</option>
          @endif
          @if($user->school == "School of Economics")
            <option value="School of Economics" selected="selected">School of Economics</option>
          @else
             <option value="School of Economics">School of Economics</option>
          @endif
          @if($user->school == "School of Accountancy")
            <option value="School of Accountancy" selected="selected">School of Accountancy</option>
          @else
            <option value="School of Accountancy">School of Accountancy</option>
          @endif
          @if($user->school == "School of Business")
            <option value="School of Business" selected="selected">School of Business</option>
          @else
            <option value="School of Business">School of Business</option>
          @endif
           @if($user->school == "School of Social Science")
            <option value="School of Social Science" selected="selected">School of Social Science</option>
          @else
            <option value="School of Social Science">School of Social Science</option>
          @endif
        @endif
      </select>
    {{Form::hidden('userid',$user->id)}}
       <!-- </div>-->
       <br>
    <div class="ui-grid-a" style="width:100%">
        <div class="ui-block-a"></div>
      <div class="ui-block-b"><button type="submit" data-theme="a" data-icon="check" data-mini="true">Submit</button></div>
    </div>
  </div>
  {{Form::close()}}
</div> 






<div data-role="popup" id="mySaveModal" class="mySaveModal">
  {{Form::open('getthebid','POST')}}
    <div style="width: 250px;
margin: 10px 30px;">
      <p class="plan-p">Price Bidded:</p>
      {{ Form::text('price','',array('id'=>'price'))}}
      {{ Form::hidden('planid','',array('id'=>'planid'))}}
      <div class="ui-grid-a">
        <div class="ui-block-a"></div>
        <div class="ui-block-b"><button type="submit" data-theme="a" data-icon="check" data-mini="true"  style="width: 99%;">Submit</button></div>
      </div>
    </div>
       
  {{Form::close()}}
</div> 
<script>
  $(".click").click(function () {
    x= $(this).val();
    $('#planid').val(x);
    $( '.mySaveModal' ).popup( 'open' );

 });
  $(".edit").click(function(){
    $('.editpopup').popup('open');
  });
</script>

    
@endsection
  