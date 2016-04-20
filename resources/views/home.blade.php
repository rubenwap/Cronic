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


                </div>

                <div class="panel-body">



<a href="{{ url('/create') }}"><button type="button" class="btn btn-primary">Add Entry</button></a>
              <h2>Latest:</h2>

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
                    <span class="hiddenFeeling" ><span class="textFeeling">{{$article->feeling}}</span></span>
</a>
                </div>


                </div>
                </div>
                </article>

                @endforeach

  <h2>Progress:</h2>
  Not implemented yet (link to latest chart)<br>
  <img src="http://placehold.it/350x150">

    <h2>Reminders:</h2>
    Not implemented yet (link to latest reminders)

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
