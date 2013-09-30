@layout('layouts.master')
@section('content')


  <style type="text/css" media="screen">
    .icon{
      height:80px;
      width:80px;

    }
  </style>


  <h2 align="center">Teammate Search</h2>
  
  
  <div class="section-header"><h4 class="title">Plan Info</h4></div>
  <!-- Block one -->
  <div class="clleft blocks">
      <h5>Professor Name: </h5>           
  </div>
  <!-- End Block One -->
  <!-- Block Two -->
  <div class="clleft blocks">
      <h5>Course Name: </h5>
  </div>
  <!-- End Block Twon -->
  <!-- Block Three -->
  <div class="ui-grid-a">
    <div class="ui-block-a">
      <h6>10 Recommendations</h6>
    </div>
    <div class="ui-block-b">
      <h6>Price Range:</h6>
    </div>
  </div>


    <input type="text" placeholder="Search" class="span10"> 
  <h5>4 Plans</h5>

  <div class="ui-grid-c">
    <div class="ui-block-a">
      <img src="http://www.clker.com/cliparts/g/c/W/l/H/m/people-icon-md.png" class="icon">
      <h6>ZHANG Fan</h6>
      <h6>Info</h6>
    </div>
    <div class="ui-block-b">
      <img src="http://www.clker.com/cliparts/g/c/W/l/H/m/people-icon-md.png" class="icon">
      <h6>FU YU</h6>
      <h6>Info</h6>
    </div>
    <div class="ui-block-c">
      <img src="http://www.clker.com/cliparts/g/c/W/l/H/m/people-icon-md.png" class="icon">
      <h6>Haryonoo</h6>
      <h6>Info</h6>
    </div>
    <div class="ui-block-d">
      <img src="http://www.clker.com/cliparts/g/c/W/l/H/m/people-icon-md.png" class="icon">
      <h6>WANG Can</h6>
      <h6>Info</h6>
    </div>  
  </div><!-- /grid-b -->




@endsection
