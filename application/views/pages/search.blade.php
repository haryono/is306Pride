@layout('layouts.master')
@section('content')
<center><h2>Course Search</h2></center>
{{ render('common.errors_display') }}
{{Form::open('search','post',array('data-transition'=>'slide','id'=>'target'))}}
	    	<input id="search" name="search" placeholder="Course search"  data-inline="true" value="" type="hidden" data-mini="true" data-theme='d'  data-filter="true">
		 	<ul data-role="listview" data-filter-placeholder="Professor name/ course ID or Title" data-filter="true"  data-inset="true" data-mini="true" data-theme="d" data-filter-reveal="true">
				@foreach($courses as $course)
		        	<li class="ui-screen-hidden">
		        		<a href="{{URL::to('learnmore/'.$course->id);}}">
		                    <h3>{{$course->coursecode}}</h3>
		                    <p class="topic" style="white-space:normal"><strong>{{$course->name}} </strong></p>
		                    <p>Professor {{$course->prof}}</p>
		                    <div class="ui-grid-a">
		                        <!--price and likes better to put it inside div rather than in the value-->
		                        <div class="ui-block-a"><input type="reset" value='e$ {{number_format($course->avgprice, 2, '.', '')}}' data-mini="true" data-theme="g"></div>
		                        <div class="ui-block-b"><input type="reset" value='{{$course->likecounts}} likes' data-mini="true" data-theme="g"></div>
		                    </div> 
		        		</a>
		        	</li>    
		        @endforeach
		    </ul>
{{Form::close()}}
{{Session::flash('refresh','refresh');}}
<!--auto complete--><!--
<script type="text/javascript" language="JavaScript">
$("input[data-type='search']").keyup(function() {
    if($(this).val() == '') {
        $("ul:jqmData(role='listview')").children().addClass('ui-screen-hidden');
    }
});

$('a.ui-input-clear').click(function() {
    $("input[data-type='search']").val('');
    $("input[data-type='search']").trigger('keyup');
});

$("ul>li").click(function () {         
	$('input[data-type="search"]').val($(this).text());
	$("ul:jqmData(role='listview')").children().addClass('ui-screen-hidden');
});

$('.val').click(function() {
    $('#search').val( $('input[data-type="search"]').val()) ;
    $( "#target" ).submit();
});*/
</script> -->

@endsection