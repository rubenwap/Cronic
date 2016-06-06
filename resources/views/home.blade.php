@extends('app')

@section('content')



 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
       <meta name="csrf-token" content="{{ csrf_token() }}" />


<script>
$(document).ready(function() {



 $(".aaa").on("click", function(){
     
           

     
   var articlemodal =  bootbox.dialog({
  title: 'Today is {{date("l")}} the {{date("dS")}} of {{date("F Y")}}',
  message:  
                 

  '<h2>{!! Auth::user()->name !!}, how do you feel?</h2>'+

  '{!!Form::open(["url" => "articles", "id"=>"fart"])!!}'+
  
             

'<div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel"> '+
'  <!-- Indicators -->'+
'  <ol class="carousel-indicators">'+
'    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>'+
'    <li data-target="#myCarousel" data-slide-to="2"></li>'+
'    <li data-target="#myCarousel" data-slide-to="3"></li>'+
'    <li data-target="#myCarousel" data-slide-to="4"></li>'+
'    <li data-target="#myCarousel" data-slide-to="5"></li>'+
'    <li data-target="#myCarousel" data-slide-to="6"></li>'+
'  </ol>'+
''+
'  <!-- Wrapper for slides -->'+
'  <div class="carousel-inner" role="listbox">'+
'    <div class="item active" id="1">'+
'      <img src="{{URL::to("images/ps1.jpg")}}" alt="no pain" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>NO PAIN</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="2">'+
'      <img src="{{URL::to("images/ps2.jpg")}}" alt="hurts a bit" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>HURTS A BIT</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="3">'+
'      <img src="{{URL::to("images/ps3.jpg")}}" alt="hurts a little more" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>HURTS A LITTLE MORE</h3>'+
''+
'  </div>'+
'    </div>'+
''+
''+
'    <div class="item" id="4">'+
'      <img src="{{URL::to("images/ps4.jpg")}}" alt="hurts even more" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>HURTS EVEN MORE</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="5">'+
'      <img src="{{URL::to("images/ps5.jpg")}}" alt="hurts a lot" width="160" height="120">'+
''+
'      <div class="carousel-caption">'+
'    <h3>HURTS A LOT</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="6">'+
'      <img src="{{URL::to("images/ps6.jpg")}}" alt="unbearable pain" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>UNBEARABLE PAIN</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'  </div>'+
''+
''+
'  <!-- Left and right controls -->'+
'  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">'+
'    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>'+
'    <span class="sr-only">Previous</span>'+
'  </a>'+
'  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">'+
'    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'+
'    <span class="sr-only">Next</span>'+
'  </a>'+
'</div>'+
''+
''+
'<div class="form-group">'+
''+
'    {!!Form::label('title', 'Why? ')!!}'+
'    {!!Form::text('title', null, ['class'=>'form-control'])!!}'+
'</div>'+
''+
'<div class="form-group">'+
'     {!!Form::label('body', 'Please explain: ')!!}'+
'    {!!Form::textarea('body', null, ['class'=>'form-control'])!!}'+
''+
''+
'   </div>'+
'<div class="form-group">'+
'{!!Form::number('feeling', '1', ['class'=>'form-control', 'id' => 'f'])!!}'+
'</div>'+
''+
'<div class="form-group">'+
''+
'{!! Form::checkbox('doctor', '1', '0', ['class' => 'checkbox', 'data-toggle'=>'toggle', 'data-onstyle'=>'success', 'id'=>'drcheck']) !!}'+
'{!!Form::label('doctor', 'Share with your doctor')!!}'+
' {!!Form::submit("Save Entry",  ['class'=>'btn btn-primary form-control record', 'id'=>'saveart'])!!}'+
'  </div>'+
''+
''+
''+
  '{!!Form::close()!!}'+

'@include("errors.list")'+

'</div>',
  
  
  
}); //cierre dialog
    
        $($('#myCarousel')[0]).on('slide.bs.carousel', function(ev) {
        var id = ev.relatedTarget.id;

//This gives numerical values to the pain according to the chose graph
// f is the id for the hidden text field in the form
        switch (id) {
            case "1":
                $('#f').val(1);
                break;
            case "2":
                $('#f').val(2);
                break;
            case "3":
                $('#f').val(3);
                break;
            case "4":
                $('#f').val(4);
                break;
            case "5":
                $('#f').val(5);
                break;
            case "6":
                $('#f').val(6);
                break;

        }
        
       
      
        
        
    });
    
    
    
    
    
     $('#drcheck').change(function() {
      switch ($('#drcheck').prop('checked')) {
        case true:
        doctor = 1;
        console.log(doctor);
        break;
        case false:
        doctor = 0;
        console.log(doctor);
        break;
    }
    
    
    var title = $('#title').val();
    var body = $('#body').val();
    var feeling = $('#f').val();
    
     
   
    
     var form = $( '#fart' ).on( 'submit', function(e) {
   
        e.preventDefault(); 
      
      $.ajax({
            type: "POST",
            url: '/articles/',
            data: form.serialize(),
            success: function( msg ) {
            articlemodal.modal('toggle');
           $('#confirmationArt').hide();
            $('#confirmationArt').show();
          
             $.get('/latest', function(data){ 
             data = JSON.parse(data);
             console.log(data[0].title);
             $('#latesttitle').text(data[0].title);
             $('#latestbody').text(data[0].body);
             $('#latestfeeling').text(data[0].feeling);
            $($('.imgIndex')[0]).attr("src", "../images/ps"+data[0].feeling+".jpg")
             $('#latestdate').text(moment(data[0].created_at).format('dddd Do MMMM H:mm'));
             
    });
       
       
       
            }
        });
   });
    

    
    
    }); 
    
$('#drcheck').bootstrapToggle();


 }); //ciere onclick
 
    }); //cierre document ready
    

 


</script>

<script>
$(document).ready(function() {

 $(".eaa").on("click", function(){
     
 
     
   eventmodal =   bootbox.dialog({
  title: 'Register an event in your calendar',
  message:  
    '<div>'+
    '{!!Form::open(["url" => "events", "id" => "fev"])!!}'+

'<div class="form-group">'+
''+
'                          {!!Form::label('title', 'What do you need to do? ')!!}'+
'                          {!!Form::text('title', null, ['class'=>'form-control'])!!}'+
'                      </div>'+
''+
'                      <div class="form-group">'+
''+
'                          {!!Form::label('start', 'When do you need to start it? ')!!}'+
'                          {!!Form::text('start', null, ['class'=>'form-control timepicker'])!!}'+
'                      </div>'+
''+
'                      <div class="form-group">'+
''+
'                          {!!Form::label('end', 'When do you need to end it? ')!!}'+
'                          {!!Form::text('end', null, ['class'=>'form-control timepicker'])!!}'+
'                      </div>'+
''+
'                     <div class="form-group">'+
 ''+                  
 '                      {!!Form::submit("Save Event",  ['class'=>'saveevent btn btn-primary form-control record'])!!}'+
   '{!!Form::close()!!}'+

 '                     </div>'+

'@include("errors.list")'+
'</div>',


  
  
  
});
    
    
jQuery('.timepicker').datetimepicker();


 
     var form = $( '#fev' ).on( 'submit', function(e) {
        e.preventDefault(); 
      
      $.ajax({
            type: "POST",
            url: '/events/',
            data: form.serialize(),
            success: function( msg ) {
            eventmodal.modal('toggle');
           $('#confirmationEv').hide();
            $('#confirmationEv').show();

   $.get('/oneweek', function(data){ 
             data = JSON.parse(data);
             console.log(data);
             $('#levent').html("");
            
             for (var i = 0; i<data.length; i++)
             {
                 $('#levent').append('<li><a href="/events/'+data[i].id+ '">'+data[i].title+', starting on '+data[i].start+'</a></li>');
                 
             }
             
    });

            
                     }
        });
   });
    
    
    
    
    
    
    


 }); //ciere onclick
 
    }); //cierre document ready
    

</script>





<div class="container">






    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  @if (Auth::user()->isdoctor === "no")

                       Hi {!! Auth::user()->name !!}, you are a patient and are correctly logged in!

                  @else
                       Hi {!! Auth::user()->name !!}, you are a doctor and are correctly logged in!

                       @endif


                </div> <!-- heading -->

                <div class="panel-body">

                  @foreach($articlesPain as $article)
                  <span class="feelid" style="display:none;">{{$article->feeling}}</span>
                  <span class="feeldate" style="display:none;">{{$article->created_at}}</span>

                      @endforeach
                  <script>
                  var pains = [];
                  var dates = [];
                  var painid = document.getElementsByClassName("feelid");
                  for(var i = 0; i < painid.length; i++) {
                  pains.push(parseInt(document.getElementsByClassName("feelid")[i].innerText));
                  dates.push(document.getElementsByClassName("feeldate")[i].innerText);
                  }

                  </script>





<span>QUICK ADD: </span>
<button type="button" class="btn btn-primary additions aaa">  <span class="glyphicon glyphicon-plus" title="Add Entry" aria-hidden="true"></span>
 </button>
<button type="button" class="btn btn-primary additions eaa">  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
 </button>
              <h2>Latest entry:</h2>

              @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif
<div class="alert alert-success" style="display:none;" id="confirmationArt"> Entry successfully saved! </div>
<div class="alert alert-success" style="display:none;" id="confirmationEv"> Event successfully saved! </div>




                @foreach($articles as $article)
                <article>
                  <div class="container-fluid">

                    <div class="row indexEntries">
                 <div class="col-md-6" id="latestevents">

	<a href="{{action('PagesController@show', [$article->id])}}">

                    <h2 id="latesttitle">{{$article->title}}</h2>
                    <p id="latestdate">{{$article->created_at->format('l dS F H:m')}}</br>
                    <p id="latestbody">{{str_limit($article->body,100)}}</p>
                </div>
                     <div class="col-md-6">
                    <span class="hiddenFeeling pull-right" ><span id="latestfeeling" class="textFeeling">{{$article->feeling}}</span></span>
</a>
                </div>


                </div> 
                </div> 
                </article>

                @endforeach


                </div> <!-- panel body-->
                
                            </div> <!-- panel -->
         </div> <!-- col -->
          </div> <!-- row -->
          
          
           <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
  Your reminders for the next 7 days:
  </div>
   <div class="panel-body" >
  
  
<ul id="levent">
    @foreach($events as $event)
<li><a href="{{action('EventsController@show', [$event->id])}}">{{$event->title}}, starting on {{$event->start}}</a></li>


    @endforeach
  </ul>
  
  
 </div> <!-- panel body-->
                       </div> <!-- panel -->
         </div> <!-- col -->
          </div> <!-- row -->
          
          
            <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
  Calendar:
  </div>   <!-- panel heading -->
  <div class="panel-body">
<div id="calendar"></div>
</div> <!-- panel body-->
                       </div> <!-- panel -->
         </div> <!-- col -->
          </div> <!-- row -->
          
          
        
                         <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
  Pain Progress:
  </div>   <!-- panel heading -->
  <div class="panel-body">
<a href="{{ url('/progress') }}"><div id="mainChart" style="width:100%; height:400px;"></div></a>
</div> <!-- panel body-->
                       </div> <!-- panel -->
         </div> <!-- col -->
          </div> <!-- row -->
        

        
                                
        
        
        
        
        
        
  
</div> <!-- container -->
@endsection
