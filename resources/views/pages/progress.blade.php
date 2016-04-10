

@extends('app')


@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Your feelings, last month</div>

                  <div class="panel-body">

@foreach($articles as $article)
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


<div id="mainChart" style="width:100%; height:400px;"></div>










</div>
</div>
</div>
</div>
</div>

@stop
