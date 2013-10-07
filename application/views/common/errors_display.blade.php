@if($errors->has())
	<div data-role="popup" id="popupMsg" data-theme="a" class="ui-corner-all data-history="false" ">
		<a href="#" data-rel="back" data-role="button" data-theme="c" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>	
        <div style="padding:10px 20px;">
            <h4>Following errors have been detected:</h4>
            <ul>
		        @foreach( $errors->all() as $message )
		          <li>{{ $message }}</li>
		        @endforeach 
	        </ul>
        </div>
	</div>
@endif

@if(Session::has('error'))
	<div data-role="popup" id="popupMsg" data-theme="a" class="ui-corner-all data-history="false" ">
		<a href="#" data-rel="back" data-role="button" data-theme="c" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>	
        <div style="padding:10px 20px;">
            <strong>{{Session::get('error')}}</strong>
        </div>
	</div>
@endif
@if(Session::has('success'))
	<div data-role="popup" id="popupMsg" data-theme="a" class="ui-corner-all data-history="false" ">
		<a href="#" data-rel="back" data-role="button" data-theme="c" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>	
        <div style="padding:10px 20px;">
            <strong>{{Session::get('success')}}</strong>
        </div>
	</div>
@endif
@if(Session::has('warning'))
	<div data-role="popup" id="popupMsg" data-theme="a" class="ui-corner-all data-history="false" ">
		<a href="#" data-rel="back" data-role="button" data-theme="c" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>	
        <div style="padding:10px 20px;">
            <strong>{{Session::get('warning')}}</strong>
        </div>
	</div>
@endif
