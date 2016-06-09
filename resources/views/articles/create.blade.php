@extends('app')

@section('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Today is {{date('l')}} the {{date('dS')}} of {{date('F Y')}}</div>

                  <div class="panel-body">
<script>
$(document).ready(function() {

$(function() {
    $('form').submit(function() {
 if (document.getElementById("drcheck").checked) {
document.getElementById("drhelp").parentNode.removeChild(document.getElementById("drhelp"));

 }
        return true; // return false to cancel form action
    });
});
});
</script>


  <h2 id="ftitle">{!! Auth::user()->name !!}, how do you feel?</h2>

  {!!Form::open(['url' => 'articles'])!!}

@include('articles.form', ['submitBtn' => 'Save Entry'])
  {!!Form::close()!!}

@include('errors.list')
</div>
</div>
</div>
</div>
</div>
@endsection
