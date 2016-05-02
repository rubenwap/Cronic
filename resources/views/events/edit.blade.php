@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Scheduler</div>

                    <div class="panel-body">


                      <h2>Edit your event</h2>
                      {!!Form::model($event,['method'=> 'PATCH', 'action' => ['EventsController@update', $event->id]])!!}

                      @include('events.form', ['submitBtn' => 'Modify Event'])


                        {!!Form::close()!!}
                        @include('errors.list')


                      @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif



  <div id="calendar" ></div>





  </div>
  </div>
  </div>
  </div>
  </div>
@stop
