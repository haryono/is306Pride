@layout('layouts.master')
@section('content')
{{ render('common.errors_display') }}
        <h2 align="center">Invitation</h2>

        <ul data-role="listview" data-inset="true" >
            <li data-role="list-divider" data-theme="a">Invitation</li>
            <li data-theme="d">
              <center><h4 style="white-space:normal">Interactive Design Protocol</h4></center>
              <center><h4>Professor Benjamin</h4></center>
              <div class="ui-grid-a">
                  <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
                  <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
              </div>  

              <div class="ui-grid-a">
                <div class="ui-block-a">
                <button disabled="" data-mini="true" data-theme="b">2013 Term 2</button>
                </div>
                <div class="ui-block-b">
                    
                <a href="{{URL::to('learnmore');}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
                </div>

              </div>

              <center><h4 style="white-space:normal">Team</h4></center>
              <div class="ui-grid-c">
                <div class="ui-block-a">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-b">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-c">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-d">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>  
              </div>


              <div class="ui-grid-a">
                <div class="ui-block-a">
                <!--button href="#popupReject" style="background-color:red" data-icon="minus">Reject</button-->
                <a href="#popupReject" data-rel="popup" data-mini="true" data-position-to="window"  data-transition="slide" data-role="button" data-icon="minus" style="background-color:red" data-role="button" >Reject</a>
                </div>
                <div class="ui-block-b">
                <!--a href="#popupAccept" data-role="button" data-icon="check" data-theme="a">Accept</a-->
                <a href="#popupAccept" data-rel="popup" data-mini="true" data-position-to="window"  data-transition="slide" data-role="button" data-icon="check"  data-theme="a" data-role="button" >Accept</a>
                </div>

              </div>
            </li>
        </ul> 

        <ul data-role="listview" data-inset="true" >
            <li data-role="list-divider" data-theme="a">Invitation</li>
            <li data-theme="d">
              <center><h4 style="white-space:normal">Interactive Design Protocol</h4></center>
              <center><h4>Professor Benjamin</h4></center>
              <div class="ui-grid-a">
                  <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
                  <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
              </div>  

              <div class="ui-grid-a">
                <div class="ui-block-a">
                <button disabled="" data-mini="true" data-theme="b">2013 Term 2</button>
                </div>
                <div class="ui-block-b">
                    
                <a href="{{URL::to('learnmore');}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
                </div>

              </div>

              <center><h4 style="white-space:normal">Team</h4></center>
              <div class="ui-grid-c">
                <div class="ui-block-a">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-b">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-c">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-d">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>  
              </div>

              <div class="ui-grid-a">
                <div class="ui-block-a">
                <!--button href="#popupReject" style="background-color:red" data-icon="minus">Reject</button-->
                <a href="#popupReject" data-rel="popup" data-mini="true" data-position-to="window"  data-transition="slide" data-role="button" data-icon="minus" style="background-color:red" data-role="button" >Reject</a>
                </div>
                <div class="ui-block-b">
                <!--a href="#popupAccept" data-role="button" data-icon="check" data-theme="a">Accept</a-->
                <a href="#popupAccept" data-rel="popup" data-mini="true" data-position-to="window"  data-transition="slide" data-role="button" data-icon="check"  data-theme="a" data-role="button" >Accept</a>
                </div>
              </div>
            </li>
        </ul> 

        <ul data-role="listview" data-inset="true" >
            <li data-role="list-divider" data-theme="a">Invitation</li>
            <li data-theme="d">
              <center><h4 style="white-space:normal">Interactive Design Protocol</h4></center>
              <center><h4>Professor Benjamin</h4></center>
              <div class="ui-grid-a">
                  <div class="ui-block-a"><input type="reset" value="e$ 80-90" data-mini="true" data-theme="g"></div>
                  <div class="ui-block-b"><input type="reset" value="3000 likes" data-mini="true" data-theme="g"></div>
              </div>  

              <div class="ui-grid-a">
                <div class="ui-block-a">
                <button disabled="" data-mini="true" data-theme="b">2013 Term 2</button>
                </div>
                <div class="ui-block-b">
                    
                <a href="{{URL::to('learnmore');}}" data-mini="true" data-transition="slide" data-role="button" data-icon="arrow-r" data-theme="e" data-iconpos="right" >Learn more</a>
                </div>

              </div>

              <center><h4 style="white-space:normal">Team</h4></center>
              <div class="ui-grid-c">
                <div class="ui-block-a">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-b">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-c">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>
                <div class="ui-block-d">
                  <img src="{{URL::to_asset('gallerythumbs/default.png');}}" class="icon">
                  <h6 style="font-size:13px">Name</h6>
                  <font color="green" style="font-size:13px">Accepted</font>
                </div>  
              </div>
              <!--div class="ui-grid-a">
                <div class="ui-block-a">
                <button style="background-color:red" data-icon="minus">Reject</button>
                </div>
                <div class="ui-block-b">
                <a href="#" data-role="button" data-icon="check" data-theme="a">Accept</a>
                </div>

              </div-->
              <div class="ui-grid-a">
                <div class="ui-block-a">
                <!--button href="#popupReject" style="background-color:red" data-icon="minus">Reject</button-->
                <a href="#popupReject" data-rel="popup" data-mini="true" data-position-to="window"  data-transition="slide" data-role="button" data-icon="minus" style="background-color:red" data-role="button" >Reject</a>
                </div>
                <div class="ui-block-b">
                <!--a href="#popupAccept" data-role="button" data-icon="check" data-theme="a">Accept</a-->
                <a href="#popupAccept" data-rel="popup" data-mini="true" data-position-to="window"  data-transition="slide" data-role="button" data-icon="check"  data-theme="a" data-role="button" >Accept</a>
                </div>
              </div>
            </li>
        </ul> 
        <div data-role="popup" id="popupAccept" >
          <form>
              <div style="padding:10px 40px;">
                  <h4>Accept the Invitation?</h4>
                  <div class="ui-grid-a" style="width:100%">
                    <div class="ui-block-a"><button type="submit" data-theme="a" data-icon="check" data-mini="true">Yes</button></div>
                    <div class="ui-block-b"><button type="submit" data-theme="a" data-icon="check" data-mini="true" >No</button></div>
                  </div>
              </div>
          </form>
      </div>

      <div data-role="popup" id="popupReject" >
          <form>
              <div style="padding:10px 40px;">
                  <h4>Reject the Invitation?</h4>
                  <div class="ui-grid-a" style="width:100%">
                    <div class="ui-block-a"><button type="submit" data-theme="a" data-icon="check" data-mini="true">Yes</button></div>
                    <div class="ui-block-b"><button type="submit" data-theme="a" data-icon="check" data-mini="true" >No</button></div>
                  </div>
              </div>
          </form>
      </div>
@endsection
