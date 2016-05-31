@extends('app')

@section('content')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function() {

 $(".aaa").on("click", function(){
     
     bootbox.dialog({
  title: 'Today is {{date("l")}} the {{date("dS")}} of {{date("F Y")}}',
  message:  
                 

                  '<div class="panel-body">'+



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
'      <img src="{{URL::to('images/ps1.jpg')}}" alt="no pain" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>NO PAIN</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="2">'+
'      <img src="{{URL::to('images/ps2.jpg')}}" alt="hurts a bit" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>HURTS A BIT</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="3">'+
'      <img src="{{URL::to('images/ps3.jpg')}}" alt="hurts a little more" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>HURTS A LITTLE MORE</h3>'+
''+
'  </div>'+
'    </div>'+
''+
''+
'    <div class="item" id="4">'+
'      <img src="{{URL::to('images/ps4.jpg')}}" alt="hurts even more" width="160" height="120">'+
'      <div class="carousel-caption">'+
'    <h3>HURTS EVEN MORE</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="5">'+
'      <img src="{{URL::to('images/ps5.jpg')}}" alt="hurts a lot" width="160" height="120">'+
''+
'      <div class="carousel-caption">'+
'    <h3>HURTS A LOT</h3>'+
''+
'  </div>'+
'    </div>'+
''+
'    <div class="item" id="6">'+
'      <img src="{{URL::to('images/ps6.jpg')}}" alt="unbearable pain" width="160" height="120">'+
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
  '{!!Form::close()!!}'+

'@include("errors.list")'+

'</div>',
  
  
  
});
     
 });
 
 
});

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






<button type="button" class="btn btn-primary additions aaa">  <span class="glyphicon glyphicon-plus" title="Add Entry" aria-hidden="true"></span>
 </button>
<button type="button" class="btn btn-primary additions eaa">  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
 </button>
              <h2>Latest entry:</h2>

              @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif





                @foreach($articles as $article)
                <article>
                  <div class="container-fluid">

                    <div class="row indexEntries">
                 <div class="col-md-6">

	<a href="{{action('PagesController@show', [$article->id])}}">

                    <h2>{{$article->title}}</h2>
                    {{$article->created_at->format('l dS F H:m')}}</br>
                    <p>{{str_limit($article->body,100)}}</p>
                </div>
                     <div class="col-md-6">
                    <span class="hiddenFeeling pull-right" ><span class="textFeeling">{{$article->feeling}}</span></span>
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
   <div class="panel-body">
  
  
<ul>
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
