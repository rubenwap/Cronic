@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Scheduler</div>

                    <div class="panel-body">

  <div id="calendar" ></div>


<h2>Schedule something</h2>
{!!Form::open(['url' => 'schedule'])!!}








<div class="form-group">

    {!!Form::label('title', 'What do you need to do? ')!!}
    {!!Form::text('title', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">

    {!!Form::label('when', 'When do you need to do it? ')!!}
    {!!Form::text('when', null, ['class'=>'form-control timepicker'])!!}
</div>

<div class="form-group">
 {!!Form::submit('Save Event',  ['class'=>'btn btn-primary form-control'])!!}
</div>

  {!!Form::close()!!}

  @if($errors ->any())

    <ul class"alert alert-danger" role="alert">
  @foreach ($errors ->all() as $error)
  <li>{{$error}}</li>

  @endforeach
  </ul>

  @endif

  </div>
  </div>
  </div>
  </div>
  </div>
@stop
