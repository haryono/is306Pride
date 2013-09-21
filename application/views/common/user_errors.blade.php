@if($errors->has())
	<ul>
		{{ $errors->first('name', '<li>:message</li>') }}
		{{ $errors->first('contactno', '<li>:message</li>') }}
		{{ $errors->first('title', '<li>:message</li>') }}
		{{ $errors->first('licenseid', '<li>:message</li>') }}
		{{ $errors->first('email', '<li>:message</li>') }}
		{{ $errors->first('membership', '<li>:message</li>') }}
	</ul>
@endif