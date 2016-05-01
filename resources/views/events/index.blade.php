@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Scheduler</div>

                    <div class="panel-body">


                      <h2>Your events <a href="{{ url('/events/create') }}"><button type="button" class="btn btn-primary">Add New</button></a>
</h2>
                      <div class="table-responsive">
                        <table class="table">
                          <tr><th>Start Date</th><th>End Date</th>
                    <th>Title</th>
                          </tr>
                    @foreach($events as $event)


                    <tr>
                    <td><a href="{{action('EventsController@show', [$event->id])}}">{{$event->start}} </a></td>
                    <td><a href="{{action('EventsController@show', [$event->id])}}">{{$event->end}} </a></td>
                    <td><a href="{{action('EventsController@show', [$event->id])}}">{{$event->title}}</a></td>
                    <td>


                    </td>

                    </tr>

                    @endforeach
                        </table>
                      </div>
                      {!! $events->render() !!}

  <div id="calendar" ></div>





  </div>
  </div>
  </div>
  </div>
  </div>
@stop
