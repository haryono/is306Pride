@layout('layouts.master')
@section('content')

       
        <form class="form text-center">
          <h2 >Search Results </h2>
        </form>
      

<ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Filter / Quick Find">
    <li data-role="list-divider" data-theme="f">SIS<span class="ui-li-count">2</span></li>
    <li><a href="index.html">
    <h2>IDP</font></h2>
    <p>Professor Benjamin Gan</p>
    <p><strong>Course code</Strong> : IS306</p>
    <p><strong>Course name</strong> : Interactive Design Prototype</p>
        <p class="ui-li-aside"><strong><font color="grey">e$ 90-100<br><br>3000 likes</font></strong></p><br>
    </a></li>
    <li><a href="index.html">
    <h2>IST</h2>
    <p>Professor Ding Xu Hua</p>
    <p><strong>Course code</Strong> : IS108</p>
    <p><strong>Course name</strong> : Information Security</p>
        <p class="ui-li-aside"><strong><font color="grey">e$ 20-30<br><br>330 likes</font></strong></p><br>
    </a></li>
    </a></li>
    <li data-role="list-divider" data-theme="f">Social Science<span class="ui-li-count">1</span></li>
    <li><a href="index.html">
    <h2>ISee</h2>
    <p>Professor Avery Walker</p>
    <p><strong>Course code</Strong> : IS306</p>
    <p><strong>Course name</strong> : Interactive Seeing</p>
        <p class="ui-li-aside"><strong><font color="grey">e$ 10-12<br><br>10 likes</font></strong></p><br>
    </a></li>
    </a></li>
</ul>
        <!-- End Block Three -->
        <!--
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
              {{ HTML::link('learnmore', 'Learn More', array('class' => 'pull-right btn btn-primary')) }}
              
              <h4>Course Name</h4>
              <h4>Professor Name</h4>
              
              <span class="label label-success">Recommendation</span>
              <span class="label label-success">Price Range</span>
              
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              {{ HTML::link('learnmore', 'Learn More', array('class' => 'pull-right btn btn-primary')) }}
              
              <h4>Course Name</h4>
              <h4>Professor Name</h4>
              
              <span class="label label-success">Recommendation</span>
              <span class="label label-success">Price Range</span>
              
            </div>
          </li>
        </ul>-->

@endsection
