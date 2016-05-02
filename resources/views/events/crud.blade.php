<style>
button {
  margin-right:1em;
}
</style>


    {!!Form::model($event,['method'=> 'GET', 'class' => 'pull-right', 'action' => ['EventsController@edit', $event->id]])!!}
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
    {!!Form::close()!!}

    {!! Form::open(['url' => route('events.destroy', $event->id), 'method' => 'delete', 'class' => 'pull-right']) !!}
             <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
         {!! Form::close() !!}
