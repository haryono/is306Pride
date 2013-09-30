@layout('layouts.master')
@section('content')

  <style type="text/css" media="screen">
    .icon{
      height:80px;
      width:80px;

    }
  </style>

  <style type="text/css" media="screen">
    .ui-field-contain{
      height:80px;
      width:280px;


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


  <div class="ui-grid-a">
    <div class="ui-block-a">
      <img src="http://www.clker.com/cliparts/g/c/W/l/H/m/people-icon-md.png" class="icon">
      <h6>FU YU</h6>
      <h6>Info</h6>
    </div>
    <div class="ui-block-b">
      <div class="ui-field-contain">
        <!--<label for="select-native-5"></label>-->
        <select name="select-native-5" id="select-native-5" data-mini="true">
            <option value="small">2013-14 Term2</option>
            <option value="medium">2014-15 Term1</option>
            <option value="large">2014-15 Term2</option>
        </select>
      </div>
      <div class="ui-field-contain">
          <!--<label for="submit-5"></label>-->
          <button type="submit" id="submit-5" data-mini="true">Send Invitation</button>
      </div>
    </div>
  </div>


@endsection