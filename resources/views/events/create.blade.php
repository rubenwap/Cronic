@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Scheduler</div>

                    <div class="panel-body">


                      <h2>Schedule something</h2>
                      {!!Form::open(['url' => 'events'])!!}
                      @include('events.form', ['submitBtn' => 'Save Event'])


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
