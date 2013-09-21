<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Realty Wall Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Realty Wall">
    <meta name="author" content="CARTES">

    {{ HTML::style('css/jquery-ui-1.8.16.custom.css')}}
    {{ HTML::style('css/bootstrap.min.css') }}
    <style type="text/css">
        body {
            padding-top: 0px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    {{ HTML::style('css/bootstrap-responsive.min.css') }}
    {{ HTML::style('css/bootstrap-custom.css') }}
    
</head>

<body>
    <div class="container-fluid">
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    {{ HTML::link('/','RealtyWall', array('class' => 'brand'))}}
                    <div class="nav-collapse navbar-responsive-collapse collapse" style="height: 0px;">
                        <ul class="nav">
                            <li>{{ HTML::link('clients', 'M.Clients') }}</li>
                            <li>{{ HTML::link('shortlist', 'My Shortlist') }}</li>
                            <li>{{ HTML::link('profile', 'Profile') }}</li>
                            <li>{{ HTML::link('post', 'My Posts') }}</li>
                            <li>{{ HTML::link('admin', 'Create a Post') }}</li>
                            @if (Auth::guest())
                            <li class="divider-vertical pull-right"></li>
                            <li>{{ HTML::link('admin', 'Login',  array('class' => 'pull-right')) }}</li>
                            <li>{{ HTML::link('register', 'Register',  array('class' => 'pull-right')) }}</li>
                            @else
                            <li class="divider-vertical pull-right"></li>

                            <li>{{ HTML::link('logout', 'Logout',  array('class' => 'pull-right')) }}</li>
                            @endif
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse2">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand">Search</a>
                    <div class="nav-collapse navbar-responsive-collapse2 collapse" style="height: 0px;">
                        <ul class="nav">
                            {{ Form::open('search', 'POST', array('class' => 'navbar-form pull-left')) }}
                            <select name="type" class="span2" >
                               <option value="r">For Rent</option>
                               <option value="s">For Sale</option>
                           </select>
                           {{ Form::text('title', '', array('class' => 'span2', 'placeholder' => 'Address', 'id' => 'area'))}}
                           {{ Form::text('price', '', array('class' => 'span2', 'placeholder' => 'Max Budget')) }}
                           {{ Form::text('description', '', array('class' => 'span2', 'placeholder' => 'Description')) }}
                           {{ Form::submit('Search', array('class'=>'btn')) }}
                           {{ HTML::link('advancedsearch', 'Advanced', array('class' => 'btn')) }}
                           {{ Form::close()}}

                       </ul>

                   </div>
                   <!-- /.nav-collapse -->
               </div>
           </div>
           <!-- /navbar-inner -->
       </div>
       <!--TEMPLATE ABOVE-->

       <div class="container">
        <h1>Realty Wall</h1>
        <em>A place to find sweet home</em>
    </div>

    <div class="container">
        @yield('content')
        <!--iframe width="268" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=hillcrest+arcadia+singapore&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.90509,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Hillcrest+Arcadia,+Singapore&amp;t=m&amp;ll=1.334976,103.809385&amp;spn=0.025742,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=hillcrest+arcadia+singapore&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.90509,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Hillcrest+Arcadia,+Singapore&amp;t=m&amp;ll=1.334976,103.809385&amp;spn=0.025742,0.025749&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small-->
    </div>
    @yield('list')

    <!--TEMPLATE BELOW-->
    <hr>

    <footer>
        <p>Realty Wall</p>
    </footer>
</div>


<!-- Placed at the end of the document so the pages load faster -->
{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
{{ HTML::script('js/jquery-ui-1.8.16.custom.min.js')}}
{{ HTML::script('js/script.js')}}

</body>
</html>