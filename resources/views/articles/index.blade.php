@extends('app')


@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">View all entries</div>

                  <div class="panel-body">

                    @if(Session::has('message')) <div class="alert alert-success"> {{Session::get('message')}} </div> @endif

                    <div class="table-responsive">
                      <table class="table">
                        <tr><th>Date</th>
<th>Title</th>
                        </tr>
@foreach($articles as $article)


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
