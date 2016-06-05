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
                    <div class="alert alert-success" id="cedit" style="display:none;">Entry edited successfully</div>

                    <div class="table-responsive">
                      <table class="table">
                        <thead><th>Date</th>
<th>Title</th>
                        </thead>
@foreach($articles as $article)

<script>

$(document).ready(function() {
     
    
    var title = "{{$article->title}}";
    var body = "{{$article->body}}";
    var feeling = "{{$article->feeling}}";
    var token = $('meta[name="csrf-token"]').attr('content');
 
  $('#{{$article->id}}.fdel').on('click', function(e) {
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
    
    
        var doctor;
          var id;
    var title;
    var body;
    var feeling;
    

  $('#{{$article->id}}.fedit').on('click', function(e) {
    //var inputData = $('#formDeleteProduct').serialize();
 

 
 

          $.get('/articles/'+ {{$article->id}} +'/edit', function(data){ 
             data = JSON.parse(data);
             console.log(data);
             id = data.id;
             title = data.title;
             body = data.body;
             feeling = data.feeling;
             doctor = data.doctor;
             console.log(doctor);
             $('#title').val(title);
    $('#body').val(body);
    $('#f').val(feeling);
    $('#drcheck').val(doctor);
    $($($($("#myCarousel")[0]).find(".item.active"))[0]).removeClass("active");
    $($($($("#myCarousel")[0]).find("#"+feeling))[0]).addClass("active");
     if (doctor === 1) {
         $('#drcheck').prop('checked', true).change();
     }
    
    
    $('#drcheck').change(function() {
      switch ($('#drcheck').prop('checked')) {
        case true:
        doctor = 1;
        break;
        case false:
        doctor = 0;
        break;
    }
     console.log (doctor);
    });
    
    
             
    });
    
       var articlemodal =  bootbox.dialog({
  title: 'Today is {{date("l")}} the {{date("dS")}} of {{date("F Y")}}',
  message:  
                 

  '<h2>{!! Auth::user()->name !!}, how do you feel?</h2>'+

  '{!!Form::open(["url" => "articles"])!!}'+
  
             

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
 
 
 






      var form = $( 'form' ).on( 'submit', function(e) {
        e.preventDefault(); 
      console.log($('#f').val());
      $.ajax({
            type: "POST",
            method: "PATCH",
            url: '/articles/' + id,
            
            data: {
                   
              "id": id,                 
            "title": title, 
            "body": body, 
            "feeling": $('#f').val(),
            "doctor": doctor,
            "_token":token
            
        
            },
            
            
            success: function( msg ) {
            articlemodal.modal('toggle');
           $('#cedit').hide();
            $('#cedit').show();
          
             $.get('/articlefeed', function(data){ 
             data = JSON.parse(data);
             console.log(data);
             console.log(data.data[0].id);
             
            
             
             for (var i= 0; i< document.getElementsByTagName("tbody")[0].getElementsByTagName("tr").length; i++) {
                 
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[0].getElementsByTagName("a")[0].innerHTML = moment(data.data[i].created_at).format('DD-MM-YY');
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[1].getElementsByTagName("a")[0].innerHTML = data.data[i].title;
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[2].getElementsByTagName("form")[0].id = data.data[i].id;
               document.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[i].getElementsByTagName("td")[2].getElementsByTagName("form")[1].id = data.data[i].id;
                                             
              
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
