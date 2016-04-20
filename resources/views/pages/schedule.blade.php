@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Scheduler</div>

                    <div class="panel-body">


                      <h2>Schedule something</h2>
                      {!!Form::open(['url' => 'schedule'])!!}

                      <div class="form-group">

                          {!!Form::label('title', 'What do you need to do? ')!!}
                          {!!Form::text('title', null, ['class'=>'form-control'])!!}
                      </div>

                      <div class="form-group">

                          {!!Form::label('start', 'When do you need to start it? ')!!}
                          {!!Form::text('start', null, ['class'=>'form-control timepicker'])!!}
                      </div>

                      <div class="form-group">

                          {!!Form::label('end', 'When do you need to end it? ')!!}
                          {!!Form::text('end', null, ['class'=>'form-control timepicker'])!!}
                      </div>

                      <div class="form-group">
                       {!!Form::submit('Save Event',  ['class'=>'btn btn-primary form-control'])!!}
                      </div>

                        {!!Form::close()!!}
                        @if($errors ->any())

                          <div class="alert alert-danger" role="alert">
                        @foreach ($errors ->all() as $error)
                        {{$error}}</br>

                        @endforeach
                      </div>

                        @endif

                      @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif



  <div id="calendar" ></div>





  </div>
  </div>
  </div>
  </div>
  </div>
@stop
