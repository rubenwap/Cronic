<?php

namespace App\Http\Controllers;
//use DB;
use Request;
//use Illuminate\Http\Request;
use App\Article;
use App\Event;
use App\Http\Requests;
use Carbon\Carbon;
use App\User;



class EventsController extends Controller
{



//OK
  public function show($id) {
    $event = Event::findOrFail($id);
    return view('events.show', compact('event'));
  }
//OK


//OK
  public function create(){
  $events = Event::latest();
  return view('events.create', compact('events'));

  }
//OK


public function edit($id) {
  $event = Event::findOrFail($id);
  return view('events.edit', compact('event'));
}


public function update($id, Requests\EventRequest $request) {
  $event = Event::findOrFail($id);

  $event->update(Request::all());
  return redirect('events')->with('message', 'Entry successfully modified!');
}

public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('message', 'Event successfully deleted!');
    }



//ok
public function index()  {

$events = Event::latest()->Paginate(5);
return view('events.index', compact('events'));

}
//ok


public function store(Requests\EventRequest $request) {

  $events = Event::create(Request::all());
  return redirect()->route('events.index')->with('message', 'Event successfully created!');
}



    //
}
