
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-responsive.css') }}    

	  </head>

	  <body>
	  <div>
	    
	  </div>
	  <div class="container">
	   <ul class="nav nav-pills">
          @if(Session::get('menu') == "search")
              <li class="active"> {{ HTML::link('search', 'Search', array('class' => 'active')) }}</li>
          @else
              <li>{{ HTML::link('search', 'Search', array('class' => 'active')) }}</li>
          @endif
         
          @if(Session::get('menu') == "plan")
              <li class="active">{{ HTML::link('plan', 'Plan', array('class' => 'active')) }}</li>
          @else
              <li>{{ HTML::link('plan', 'Plan', array('class' => 'active')) }}</li>
          @endif
          @if(Session::get('menu') == "team")
              <li class="active">{{ HTML::link('teaminvite', 'Team Invitation', array('class' => 'active')) }}</li>
          @else
              <li>{{ HTML::link('teaminvite', 'Team Invitation', array('class' => 'active')) }}</li>
          @endif
          <li>{{ HTML::link('/', 'Log out', array('class' => 'active')) }}</li>
       </ul>	
	  @yield('content')
	  </div> <!-- /container -->
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

