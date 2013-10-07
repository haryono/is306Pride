@layout('layouts.master')
@section('content')
      {{ render('common.errors_display') }}
      {{Form::open('search','post',array('data-transition'=>'slide'))}}
      <table style='width:106%'><tr>
          <td>
            <input id="search" name="search" placeholder="Course search"  data-inline="true" value="" type="search" data-mini="true" data-theme='d'>
          </td>
          <td style='font-size:80%; '>
                <input type="submit" data-role="button" data-transition="slide"  data-inline="true" data-mini="true" data-iconpos="notext" data-icon="search"/>
          </td>
      </tr></table>
      {{Form::close()}}
      <ul data-role="listview" data-inset="true">
          <li data-role="list-divider" data-theme="f">SIS<span class="ui-li-count">2</span></li>
          <li><a href="{{URL::to('learnmore');}}" data-transition="slide">
          <h2>IDP</font></h2>
          <p>Professor Benjamin Gan</p>
          <p><strong>Course code</Strong> : IS306</p>
          <p><strong>Course name</strong> : Interactive Design Prototype</p>
              <p class="ui-li-aside"><strong><font color="grey">e$ 90-100<br><br>3000 likes</font></strong></p><br>
          </a></li>
          <li><a href="{{URL::to('learnmore');}}" data-transition="slide">
          <h2>IST</h2>
          <p>Professor Ding Xu Hua</p>
          <p><strong>Course code</Strong> : IS108</p>
          <p><strong>Course name</strong> : Information Security</p>
              <p class="ui-li-aside"><strong><font color="grey">e$ 20-30<br><br>330 likes</font></strong></p><br>
          </a></li>
          </a></li>
          <li data-role="list-divider" data-theme="f">Social Science<span class="ui-li-count">1</span></li>
          <li><a href="{{URL::to('learnmore');}}" data-transition="slide">
          <h2>ISee</h2>
          <p>Professor Avery Walker</p>
          <p><strong>Course code</Strong> : IS306</p>
          <p><strong>Course name</strong> : Interactive Seeing</p>
              <p class="ui-li-aside"><strong><font color="grey">e$ 10-12<br><br>10 likes</font></strong></p><br>
          </a></li>
          </a></li>
      </ul>
    
        

@endsection
