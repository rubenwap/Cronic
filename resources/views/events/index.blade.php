@extends('app')

@section('content')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Scheduler</div>
                    <div class="panel-body">
                      @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif
        <div class="alert alert-success" id="ms" style="display:none;">Event successfully deleted!</div>
                    <div class="alert alert-success" id="me" style="display:none;">There was a problem deleting your event</div>
                    <div class="alert alert-success" id="eedit" style="display:none;">Event successfully changed!</div>


                      <h2>Your events <a href="{{ url('/events/create') }}"></a>
</h2>
                      <div class="table-responsive">
                        <table class="table">
                          <thead><th>Start Date</th><th>End Date</th>
                    <th>Title</th>
                          </thead>
                    @foreach($events as $event)

<script>

$(document).ready(function() {
     
    
    var title = "{{$event->title}}";
    var start = "{{$event->start}}";
    var end = "{{$event->end}}";
    var token = $('meta[name="csrf-token"]').attr('content');
 
  $('#{{$event->id}}.fdel').on('click', function(e) {
    //var inputData = $('#formDeleteProduct').serialize();

   

    $.ajax({
        url: '/events' + '/' + {{$event->id}},
         type:'post',
       
        data: {
          
            "_method": "delete",          
            "title": title, 
            "start": start, 
            "end": end,
            "_token":token
            
        },
        success: function( message ) {
            if ( message.status === 'success' ) {
                console.log("success");
               $('#{{$event->id}}').parent().parent().fadeOut("slow");
               $("#ms").show();

        }
        },
        error: function( data ) {
            if ( data.status === 422 ) {
                console.log(data.error);
                $("#me").show();
            }
        }
    });

    return false;
});
    
  $('#{{$event->id}}.fedit').on('click', function(e) {
    //var inputData = $('#formDeleteProduct').serialize();
    var id;
    var title;
    var start;
    var end;
    
          $.get('/events/'+ {{$event->id}}+ '/edit', function(data){ 
             data = JSON.parse(data);
             console.log(data);
             id = data.id;
             title = data.title;
             start = data.start;
             end = data.end;
             
             $('#title').val(title);
    $('#start').val(start);
    $('#end').val(end);
    
                
    });
    
     eventmodal =   bootbox.dialog({
  title: 'Register an event in your calendar',
  message:  
    '<div>'+
    '{!!Form::open(["url" => "events"])!!}'+

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
  var form = $( 'form' ).on( 'submit', function(e) {
        e.preventDefault(); 
      
      $.ajax({
            type: "POST",
            method: "PATCH",
            url: '/events' + '/' + id,
            data: form.serialize(),
            success: function( msg ) {
            eventmodal.modal('toggle');
           $('#eedit').hide();
            $('#eedit').show();
          
               $.get('/eventfeed', function(data){ 
             data = JSON.parse(data);
            
            
             
             for (var i= 0; i< document.getElementsByTagName("tbody")[0].getElementsByTagName("tr").length; i++) {
                 
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[0].getElementsByTagName("a")[0].innerHTML = data.data[i].start;
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[1].getElementsByTagName("a")[0].innerHTML = data.data[i].end;
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[2].getElementsByTagName("a")[0].innerHTML = data.data[i].title;
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[3].getElementsByTagName("form")[0].id = data.data[i].id;
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[3].getElementsByTagName("form")[1].id = data.data[i].id;
                                             
              
             }
             
             
             
    });
   
         
       
       
            }
        });
   });
    
    
    
    

        
    $('#drcheck').bootstrapToggle();
    

    

    return false;
});
    

    
    });
</script>







                    <tr>
                    <td><a href="{{action('EventsController@show', [$event->id])}}">{{$event->start}} </a></td>
                    <td><a href="{{action('EventsController@show', [$event->id])}}">{{$event->end}} </a></td>
                    <td><a href="{{action('EventsController@show', [$event->id])}}">{{$event->title}}</a></td>
                    <td>

                      @include('events.crud')

                    </td>




                    </tr>

                    @endforeach
                        </table>
                      </div>
                      {!! $events->render() !!}

  




  </div>
  </div>
  </div>
  </div>
  </div>
@stop
