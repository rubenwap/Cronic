@extends('app')

@section('content')



  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Today is {{date('l')}} the {{date('dS')}} of {{date('F Y')}}</div>

                  <div class="panel-body">



  <h2>{!! Auth::user()->name !!}, how do you feel?</h2>

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
