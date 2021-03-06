@layout('master')

@section('content')

<div class="span3 well">
	<legend>Would you like to:</legend>
	<div class="btn-group">
		<button type="button" class="btn btn-primary" onclick="$('#upload_modal').modal({backdrop: 'static'});"><i class="icon-plus-sign icon-white"></i>Upload a pic?</button>
	</div>
</div>
<div class="span9">
	<h1>Your Photos</h1>
	@forelse ($photos as $photo)
	<div class="well" style="text-align:center">
		{{$photo->location}}
		<img src="{{ $photo->location}}" alt="{{ $photo->description }}" title="{{ $photo->description}}" />
		<p>{{ $photo->description }}</p>
	</div>
	@empty
	<div class="alert alert-info">
		<h4 class="alert-heading">Awww!</h4>
		<p>Seems as if you have not uploaded any photo's yet</p>
	</div>
	@endforelse
</div>


@endsection