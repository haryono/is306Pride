@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
{{Form::open('search','post',array('data-transition'=>'slide'))}}
<table style='width:100%'>
  <tr>
      <td>
        <input id="search" name="search" placeholder="Course search"  data-inline="true" value="" type="search" data-mini="true" data-theme='d'>
      </td>
      <td style='font-size:80%; '>
            <input type="submit" data-role="button" data-transition="slide"  data-inline="true" data-mini="true" data-iconpos="notext" data-icon="search"/>
      </td>
  </tr>
</table>
{{Form::close()}}
@if(sizeof($courses) != 0)
  <ul data-role="listview" data-inset="true">
    <li data-role="list-divider" data-theme="f">Searching Results<span class="ui-li-count">{{sizeof($courses)}}</span></li>
      @foreach($courses as $course)
        <?php $avgprice = DB::query('select avg(`bidprice`) as `avgprice` from `plans` where `course_id` = ?',array($course->id));?>
        <li>
          <a href="{{URL::to('learnmore/'.$course->id);}}">
            <h2>{{$course->coursecode}}&nbsp;{{$course->name}}</font></h2>
            <p>Professor {{$course->prof}}</p>
            @if($avgprice[0]->avgprice == null)
                  <p class="ui-li-aside"><strong><font color="grey">e$ 10<br>{{$course->likecounts}} likes</font></strong></p>
            @else
                  <p class="ui-li-aside"><strong><font color="grey">e$ {{$avgprice[0]->avgprice}}<br>{{$course->likecounts}} likes</font></strong></p>
            @endif
          </a> 
        </li>
      @endforeach
  </ul>
@endif
@endsection
