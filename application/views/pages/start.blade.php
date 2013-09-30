@layout('layouts.master')
@section('content')
<script>
    $(document).ready(function(){
    		$(".message").fadeIn("200");
            $(".message").fadeOut(5000);
       
    });
</script>
<style>
.message {
    display: none;
    margin: 0 0 13px;
    padding: 10px;
    border: solid 1px #bd8; 
}
</style>
    <!-- Slider Start -->
     <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="http://www.transitioning.org/wp-content/uploads/2012/05/SMU_logo.jpg" height="180" width="350"/>
          </li>
          <li>
            <img src="http://i1251.photobucket.com/albums/hh559/sunita-ns/OASIS.jpg" height="180" width="350"/>
          </li>
          <li>
            <img src="http://news.asiaone.com/A1MEDIA/news/11Nov12/others/20121103.214348_smuv.jpg" height="180" width="350" />
          </li>
        </ul>
      </div>
    <div data-role="content">
    <!-- Slider End -->
    		<center><h2>Welcome to RopeTo4.3</h2></center>
            {{Form::open('/','post')}}
            @if(Session::has('success'))
             <div class="message">Your have registered successfully.</div>
            @endif
            <hr>
            <input name="Name" id="textinput5" placeholder="Email Address" value="" type="text" data-theme="d">
            <input name="" id="textinput2" placeholder="Password" value="" type="text" data-theme="d">
        <input type="submit" value="Login" data-theme="a" data-transition='flow'>
        <h4>Have not registered?</h4>
        <a href="{{URL::to('register')}}" data-role="button" data-theme="e" data-transition='slidefade'> Click here to register </a>
    </div>
{{Form::close()}}
@endsection
  