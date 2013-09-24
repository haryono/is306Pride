@layout('layouts.default')
@section('content')

        <br>
        <br>
        <form class="form text-center">
          <h2 >Search</h2>
          <br>
          <br>
          <input type="text" class="span10"><br>
          {{ HTML::link('searchresult', 'Search', array('class' => 'btn btn-primary')) }}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <button class="btn btn-primary">I am Feeling Lucky</button>

        </form>

@endsection