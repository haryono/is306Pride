@layout('layouts.master')
@section('content')
    <div data-role="content" >
      <center><h1>Course Search:</h1></center>

      {{Form::open('searchresult','get',array('data-transition'=>'slide'))}}
		<table style='width:100%'><tr>
		    <td>
		    	<input id="searchinput1" placeholder="Course search"  data-inline="true" value="" type="search" data-mini="true" data-theme='d'>
		    </td>
		    <td style='font-size:80%; '>
		          <input type="submit" data-role="button" data-transition="slide"  data-inline="true" data-mini="true" data-iconpos="notext" data-icon="search"/>
		    </td>
		</tr></table>
		{{Form::close()}}
        
        
            
    </div>
@endsection