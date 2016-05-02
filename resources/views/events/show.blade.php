@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Scheduler</div>

                    <div class="panel-body">


                      <h2>View Event</h2>
                        @include('events.crud')
                      <ul>
                        <li>{{$event->title}}
                          <li>{{$event->start}}
                            <li>{{$event->end}}

</ul>



  <div id="calendar" ></div>





  </div>
  </div>
  </div>
  </div>
  </div>
@stop
