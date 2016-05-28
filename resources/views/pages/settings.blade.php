@extends('app')


@section('content')



  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Your Profile</div>

                  <div class="panel-body">
                  
                                        @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif


  @if($settings != "")
<div id="settingread">
@foreach($settings as $setting)
                    <p>Hi {{$name}}, you were born on {{ str_limit($setting->birth, $limit = 10, $end = ',') }}</p>
                    <p>You measure {{$setting->height}} cm and weight {{$setting->weight}} kg.
                      <p>Unfortunately you suffer from {{$setting->illness}}, under treament by {{$setting->doctor}}.</p>
                      <p>Don´t forget that your allergy list is: {{$setting->allergies}}, so follow your treatment and take care.</p>


@endforeach
</div>

<p><a href="{{ url('/settings/edit') }}">Edit your profile</a></p></p>
@endif

 @if($settings === "")
<div id="settingread">
<p>You haven´t filled in your profile yet. <a href="{{ url('/settings/edit') }}">Why don´t you do it now?</a></p>
</div>
@endif



  </div>


</div>
</div>
</div>
</div>
</div>

@stop
