@layout('layouts.default')
@section('content')

        <form class="form text-center">
          <h2 >Invite </h2>
          <input type="text" placeholder="Search" class="span10">
        </form>


        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Thumbnail label</h3>
              <p>Thumbnail caption...</p>
              <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Send Invitation</a></p>
            </div>
          </li>
        </ul>

@endsection