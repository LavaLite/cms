
@if (Session::has('message'))
    @if (Session::get('code') < 200)
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Info:<br/></strong> {{ Session::get('message') }}
        </div>
    @elseif  (Session::get('code') < 300)
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Success:<br/></strong> {{ Session::get('message') }}
        </div>
    @elseif  (Session::get('code') < 400)
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Warning:<br/></strong> {{ Session::get('message') }}
        </div>
    @else
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Error:<br/></strong> {{ Session::get('message') }}
        </div>
    @endif
@endif

@if (Session::has('errors'))
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <ul>
          @foreach(Session::get('errors')->all() as $message)
          <li>{{$message}} </li>
          @endforeach
          </ul>
        </div>
@endif
