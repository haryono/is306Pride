@if($errors->has())
	<ul>
		{{ $errors->first('title','<li>:message</li>') }}
		{{ $errors->first('type','<li>:message</li>') }}
		{{ $errors->first('zipcode','<li>:message</li>') }}
		{{ $errors->first('description','<li>:message</li>') }}
		{{ $errors->first('price','<li>:message</li>') }}
		{{ $errors->first('tenure','<li>:message</li>') }}
		{{ $errors->first('userid','<li>:message</li>') }}
	</ul>
@endifs