@layout('layouts.master')
@section('content')
   <form class="form text-center">
          <h2 >Plan </h2>
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
          </li>
          <li class="span4">
            <div class="thumbnail">
              {{ HTML::link('learnmore', 'Learn More', array('class' => 'pull-right btn btn-primary','data-transition'=>'slide')) }}
              
              <h4>Course Name</h4>
              <h4>Professor Name</h4>

              <span class="label label-success">Recommendation</span>
              <span class="label label-success">Price Range</span>
              
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              {{ HTML::link('learnmore', 'Learn More', array('class' => 'pull-right btn btn-primary','data-transition'=>'slide')) }}
              
              <h4>Course Name</h4>
              <h4>Professor Name</h4>

              <span class="label label-success">Recommendation</span>
              <span class="label label-success">Price Range</span>
              
            </div>
          </li>
          
        </ul>

@endsection
