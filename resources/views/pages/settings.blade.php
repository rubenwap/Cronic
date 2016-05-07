@extends('app')


@section('content')



  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Your Profile</div>

                  <div class="panel-body">

  @if($settings != "")
<div id="settingread">
@foreach($settings as $setting)
                    <p>Hi {{$name}}, you were born on {{ str_limit($setting->birth, $limit = 10, $end = ',') }}</p>
                    <p>You measure {{$setting->height}} cm and weight {{$setting->weight}} kg.
                      <p>Unfortunately you suffer from {{$setting->illness}}, under treament by {{$setting->doctor}}.</p>
                      <p>Don´t forget that your allergy list is: {{$setting->allergies}}, so follow your treatment and take care.</p>


@endforeach
</div>
@endif



                    <div class="form-group">
  {!!Form::open(['url' => 'settings'])!!}
                        {!!Form::label('name', 'Name: ')!!}
                        {!!Form::text('name', null, ['class'=>'form-control','placeholder'=>$name, 'readonly'])!!}
                        {!!Form::label('surname', 'Surname: ')!!}
                        {!!Form::text('surname', null, ['class'=>'form-control','placeholder'=>$surname, 'readonly'])!!}
                        {!!Form::label('birth', 'Date of birth: ')!!}
                        {!!Form::text('birth', null, ['class'=>'form-control'])!!}
                        {!!Form::label('height', 'Height (cm): ')!!}
                        {!!Form::number('height', null, ['class'=>'form-control'])!!}
                        {!!Form::label('weight', 'Weight: ')!!}
                        {!!Form::number('weight', null, ['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
{!!Form::label('allergensselect', 'Allergies: ')!!}
<select id="allergensselect" class="form-control" multiple="multiple">
    @foreach($allergens as $allergen)
<option id={{$allergen->id}} > {{$allergen->allergen}} </option>

@endforeach
</select>
  {!!Form::text('allergies', null, ['class'=>'form-control', 'id'=>'allergies',])!!}
                              </div>

<div class="form-group">
  {!!Form::label('illness', 'What is your health problem? ')!!}
  {!!Form::text('illness', null, ['class'=>'form-control'])!!}
</div>


                              <div class="form-group">
          {!!Form::label('doctorsselect', 'Who is your doctor? ')!!}
          <select id="doctorsselect" class="form-control" multiple="multiple">
                      @foreach($doctors as $doctor)
          <option id={{$doctor->id}} > {{$doctor->name}} {{$doctor->surname}}</option>

          @endforeach
          </select>
            {!!Form::text('doctor', null, ['class'=>'form-control', 'id'=>'doctor', ])!!}
<br>
  <div class="form-group">
           {!!Form::submit('Save',  ['class'=>'btn btn-primary form-control'])!!}
          {!!Form::close()!!}
                                      </div>    </div>


</div>
</div>
</div>
</div>
</div>

@stop
