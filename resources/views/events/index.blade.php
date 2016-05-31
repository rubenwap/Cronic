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


                      <h2>Your events <a href="{{ url('/events/create') }}"><button type="button" class="btn btn-primary">Add New</button></a>
</h2>
                      <div class="table-responsive">
                        <table class="table">
                          <tr><th>Start Date</th><th>End Date</th>
                    <th>Title</th>
                          </tr>
                    @foreach($events as $event)

<script>

$(document).ready(function() {
     
    
    var title = "{{$event->title}}";
    var start = "{{$event->start}}";
    var end = "{{$event->end}}";
    var token = $('meta[name="csrf-token"]').attr('content');
 
  $('#{{$event->id}}').on('click', function(e) {
    //var inputData = $('#formDeleteProduct').serialize();

   

    $.ajax({
        url: '/events/' + {{$event->id}},
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

  <div id="calendar" ></div>





  </div>
  </div>
  </div>
  </div>
  </div>
@stop
