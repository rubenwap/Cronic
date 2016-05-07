@extends('app')


@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Settings</div>

                  <div class="panel-body">

                    <div class="form-group">

                        {!!Form::label('name', 'Name: ')!!}
                        {!!Form::text('name', null, ['class'=>'form-control','placeholder'=>$name, 'readonly'])!!}
                        {!!Form::label('surname', 'Surname: ')!!}
                        {!!Form::text('surname', null, ['class'=>'form-control','placeholder'=>$surname, 'readonly'])!!}
                        {!!Form::label('birth', 'Date of birth: ')!!}
                        {!!Form::number('birth', null, ['class'=>'form-control'])!!}
                        {!!Form::label('height', 'Height (cm): ')!!}
                        {!!Form::number('height', null, ['class'=>'form-control'])!!}
                    </div>

</div>
</div>
</div>
</div>
</div>

@stop
