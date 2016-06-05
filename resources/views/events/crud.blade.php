<style>
button {
  margin-right:1em;
}
</style>


    {!!Form::model($event,['method'=> 'GET', 'id'=>$event->id, 'class' => 'pull-right fedit', 'action' => ['EventsController@edit', $event->id]])!!}
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
    {!!Form::close()!!}

    {!! Form::open(['url' => route('events.destroy', $event->id), 'method' => 'delete', 'id'=>$event->id, 'class' => 'pull-right fdel']) !!}
             <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
         {!! Form::close() !!}
