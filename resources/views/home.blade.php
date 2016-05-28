@extends('app')

@section('content')
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






<a href="{{ url('/articles/create') }}"><button type="button" class="btn btn-primary additions">  <span class="glyphicon glyphicon-pencil" title="Add Entry" aria-hidden="true"></span>
 </button></a>
<a href="{{ url('/events/create') }}"><button type="button" class="btn btn-primary additions">  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
 </button></a>

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
