@extends('app')


@section('content')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />




  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">View all entries</div>

                  <div class="panel-body">

                    @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif
                    <div class="alert alert-success" id="ms" style="display:none;">Entry successfully deleted!</div>
                    <div class="alert alert-success" id="me" style="display:none;">There was a problem deleting your entry</div>

                    <div class="table-responsive">
                      <table class="table">
                        <tr><th>Date</th>
<th>Title</th>
                        </tr>
@foreach($articles as $article)

<script>

$(document).ready(function() {
     
    
    var title = "{{$article->title}}";
    var body = "{{$article->body}}";
    var feeling = "{{$article->feeling}}";
    var token = $('meta[name="csrf-token"]').attr('content');
 
  $('#{{$article->id}}').on('click', function(e) {
    //var inputData = $('#formDeleteProduct').serialize();

   

    $.ajax({
        url: '/articles/' + {{$article->id}},
         type:'post',
       
        data: {
          
            "_method": "delete",          
            "title": title, 
            "body": body, 
            "feeling": feeling,
            "_token":token
            
        },
        success: function( message ) {
            if ( message.status === 'success' ) {
                console.log("success");
               $('#{{$article->id}}').parent().parent().fadeOut("slow");
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
  <td><a href="{{action('PagesController@show', [$article->id])}}">{{$article->created_at->format('d-m-y')}} </a></td>
  <td><a href="{{action('PagesController@show', [$article->id])}}">{{$article->title}}</a></td>
  <td>

    @include('articles.crud')

  </td>

</tr>

    @endforeach
                      </table>
                    </div>
                    {!! $articles->render() !!}









</div>
</div>
</div>
</div>
</div>

@stop
