@layout('layouts.master')
@section('content')
      <center><h2>Course Search</h2></center>

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
        
        
@endsection