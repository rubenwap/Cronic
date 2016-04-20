@extends('app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Today is {{date('l')}} the {{date('dS')}} of {{date('F Y')}}</div>

                  <div class="panel-body">



  <h2>{!! Auth::user()->name !!}, how do you feel?</h2>

  {!!Form::open(['url' => 'view'])!!}


  <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" id="1">
        <img src="img/ps1.jpg" alt="no pain" width="160" height="120">
        <div class="carousel-caption">
      <h3>NO PAIN</h3>

    </div>
      </div>

      <div class="item" id="2">
        <img src="img/ps2.jpg" alt="hurts a bit" width="160" height="120">
        <div class="carousel-caption">
      <h3>HURTS A BIT</h3>

    </div>
      </div>

      <div class="item" id="3">
        <img src="img/ps3.jpg" alt="hurts a little more" width="160" height="120">
        <div class="carousel-caption">
      <h3>HURTS A LITTLE MORE</h3>

    </div>
      </div>


      <div class="item" id="4">
        <img src="img/ps4.jpg" alt="hurts even more" width="160" height="120">
        <div class="carousel-caption">
      <h3>HURTS EVEN MORE</h3>

    </div>
      </div>

      <div class="item" id="5">
        <img src="img/ps5.jpg" alt="hurts a lot" width="160" height="120">

        <div class="carousel-caption">
      <h3>HURTS A LOT</h3>

    </div>
      </div>

      <div class="item" id="6">
        <img src="img/ps6.jpg" alt="unbearable pain" width="160" height="120">
        <div class="carousel-caption">
      <h3>UNBEARABLE PAIN</h3>

    </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>







  <div class="form-group">

      {!!Form::label('title', 'Why? ')!!}
      {!!Form::text('title', null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
       {!!Form::label('body', 'Please explain: ')!!}
      {!!Form::textarea('body', null, ['class'=>'form-control'])!!}


      </div>
  <!--

  <div class="form-group">
    {-!!Form::label('published_at', 'Publish on: ')!!}
   {-!!Form::input('date','published_at', date('Y-m-d'), ['class'=>'form-control'])!!}
  </div> -->
  <div class="form-group">
  {!!Form::number('feeling', '1', ['class'=>'form-control', 'id' => 'f'])!!}
  </div>

  <div class="form-group">
  {!!Form::label('doctor', 'Share with your doctor')!!}
{{ Form::checkbox('doctor', '1', null, ['class' => 'checkbox']) }}
    </div>


      <div class="form-group">
       {!!Form::submit('Save Entry',  ['class'=>'btn btn-primary form-control'])!!}


      </div>

  {!!Form::close()!!}

  @if($errors ->any())

<div class="alert alert-danger" role="alert">
  @foreach ($errors ->all() as $error)

  {{$error}}</br>

  @endforeach
</div>

  @endif

</div>
</div>
</div>
</div>
</div>
@endsection
