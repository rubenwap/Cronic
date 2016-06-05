<style>
button {
  margin-right:1em;
}
</style>


    {!!Form::model($article,['method'=> 'GET', 'id'=>$article->id,'class' => 'pull-right fedit', 'title'=>'Edit','action' => ['PagesController@edit', $article->id]])!!}
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
    {!!Form::close()!!}

    {!! Form::open(['url' => route('articles.destroy', $article->id), 'method' => 'delete', 'id'=>$article->id , 'class' => 'pull-right fdel','title'=>'Delete']) !!}
             <button type="submit" class="btn btn-danger bdel"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
         {!! Form::close() !!}

