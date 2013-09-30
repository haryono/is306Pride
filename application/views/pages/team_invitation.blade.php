@layout('layouts.master')
@section('content')
        <form class="form text-center">
          <h2 >Team Invitation</h2>
          <input type="text" placeholder="Search" class="span10">
        </form>


        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              {{ HTML::link('learnmore', 'Learn More', array('class' => 'pull-right btn btn-primary')) }}
              
              <h4>Course Name</h4>
              <h4>Professor Name</h4>

              <span class="label label-success">Recommendation</span>
              <span class="label label-success">Price Range</span>
            </div>

            <h4>Team</h4>
            <img src="http://www.clker.com/cliparts/g/c/W/l/H/m/people-icon-md.png" class="icon">
            <img src="http://www.clker.com/cliparts/g/c/W/l/H/m/people-icon-md.png" class="icon">
            <p><a href="#" class="btn btn-primary">Accept</a> <a href="#" class="btn btn-default">Reject</a></p>
          </li>
          
        </ul>

@endsection
