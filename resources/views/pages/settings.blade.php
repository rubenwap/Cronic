@extends('app')


@section('content')
<style>
.select2-container {
    width: 100% !important;
}

.modal-body {
    height: 600px !important;
}
</style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
       <meta name="csrf-token" content="{{ csrf_token() }}" />

<script>
$(document).ready(function() {
        $(".select2-container").css("width", "100%");
        $(".modal-body").css("height", "600px")

$(".editprofilelink").on("click", function(){
     
    
    var settingsmodal =  bootbox.dialog({
  title: 'Edit your Profile',
  message:  

'                    <div class="form-group">'+
'  {!!Form::open(["url" => "settings/edit"])!!}'+
'                        {!!Form::label("name", "Name: ")!!}'+
'                        {!!Form::text("name", null, ["class"=>"form-control","placeholder"=>$name, "readonly"])!!}'+
'                        {!!Form::label("surname", "Surname: ")!!}'+
'                        {!!Form::text("surname", null, ["class"=>"form-control","placeholder"=>$surname, "readonly"])!!}'+
'                        {!!Form::label("birth", "Date of birth: ")!!}'+
'                        {!!Form::text("birth", null, ["class"=>"form-control timepicker"])!!}'+
'                        {!!Form::label("height", "Height (cm): ")!!}'+
'                        {!!Form::number("height", null, ["class"=>"form-control"])!!}'+
'                        {!!Form::label("weight", "Weight: ")!!}'+
'                        {!!Form::number("weight", null, ["class"=>"form-control"])!!}'+
'                    </div>'+
'                    <div class="form-group">'+
'{!!Form::label("allergensselect", "Allergies: ")!!}'+
'<select id="allergensselect" class="form-control" multiple="multiple">'+
'    @foreach($allergens as $allergen)'+
'<option id={{$allergen->id}} > {{$allergen->allergen}} </option>'+
''+
'@endforeach'+
'</select>'+
'  {!!Form::text("allergies", null, ["class"=>"form-control", "id"=>"allergies",])!!}'+
'                              </div>'+
''+
'<div class="form-group">'+
'  {!!Form::label("illness", "What is your health problem? ")!!}'+
'  {!!Form::text("illness", null, ["class"=>"form-control"])!!}'+
'</div>'+
''+
''+
'                              <div class="form-group">'+
'          {!!Form::label("doctorsselect", "Who is your doctor? ")!!}'+
'          <select id="doctorsselect" class="form-control" multiple="multiple">'+
'                      @foreach($doctors as $doctor)'+
'          <option id={{$doctor->id}} > {{$doctor->name}} {{$doctor->surname}}</option>'+
''+
'          @endforeach'+
'          </select>'+
'            {!!Form::text("doctor", null, ["class"=>"form-control", "id"=>"doctor", ])!!}'+
'<br>'+
'  <div class="form-group">'+
'           {!!Form::submit("Save",  ["class"=>"btn btn-primary form-control record"])!!}'+
'          {!!Form::close()!!}'+
'                                      </div>'+
'    ',
    
  
});
jQuery('.timepicker').datetimepicker({

  timepicker:false,
  format:'Y-m-d'
});
       $( "#allergensselect" ).select2({
      theme: "bootstrap",
      tags: true
  }).on('change', function() {

  $('#allergies').val($("#allergensselect option:selected").text());
  });

  $( "#doctorsselect" ).select2({
      theme: "bootstrap",
      tags: true
  }).on('change', function() {

  $('#doctor').val($("#doctorsselect option:selected").text());
  var token =  $('meta[name="csrf-token"]').attr('content');
    $( '.record' ).on( 'click', function(e) {
        e.preventDefault(); 
      
      $.ajax({
            type: "POST",
            url: '/settings/edit',
            data: {
                birth:$('#birth').val(),
                height: $('#height').val(),
                weight:$('#weight').val(),
                allergies:$('#allergies').val().trim(),
                illness: $('#illness').val(),
                doctor: $('#doctor').val().trim(),
                "_token": token 
            
            },
            success: function( msg ) {
            settingsmodal.modal('toggle');
            $('#confirmationsettings').hide();
            $('#confirmationsettings').show();
          
             $.get('/sfeed', function(data){ 
             data = JSON.parse(data);
             $('#settingread').html("");
             $('#settingread').html("<p>Hi " + $('.dropdown-toggle').text().trim() + ", you were born on "+data[0].birth.substring(0,10) +"</p>"+
                    "<p>You measure "+data[0].height+" cm and weight "+data[0].weight+" kg."+
                      "<p>Unfortunately you suffer from "+data[0].illness+", under treament by "+data[0].doctor+".</p>"+
                      "<p>Don´t forget that your allergy list is "+data[0].allergies+", so follow your treatment and take care.</p>");
            
                    
    });
       
       
       
            }
        });
   });
    
    
    
    
    
    
    



 }); //ciere onclick
 
    }); //cierre document ready
    
 
 }); 
 
 


</script>



  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Your Profile</div>

                  <div class="panel-body">
                  <div class="alert alert-success" style="display:none;" id="confirmationsettings"> Settings successfully saved! </div>

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

<p><a href="#" class="editprofilelink">Edit your profile</a></p></p>
@endif

 @if($settings === "")
<div id="settingread">
<p>You haven´t filled in your profile yet. <a href="#" class="editprofilelink">Why don´t you do it now?</a></p>
</div>
@endif



  </div>


</div>
</div>
</div>
</div>
</div>

@stop
