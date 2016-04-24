@extends('app')

@section('content')



  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Edit: {!!$article->title!!}</div>

                  <div class="panel-body">



  <h2>{!! Auth::user()->name !!}, how do you feel?</h2>

  {!!Form::model($article,['method'=> 'PATCH', 'action' => ['PagesController@update', $article->id]])!!}


  @include('articles.form', ['submitBtn' => 'Update Entry'])

  {!!Form::close()!!}

@include('errors.list')

</div>
</div>
</div>
</div>
</div>
@endsection
