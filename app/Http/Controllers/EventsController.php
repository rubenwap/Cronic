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
use Auth;




class EventsController extends Controller
{



//OK
  public function show($id) {
    $event = Event::where('user_id', Auth::user()->id)->findOrFail($id);
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
  $event = Event::where('user_id', Auth::user()->id)->findOrFail($id);
  return view('events.edit', compact('event'));
}


public function update($id, Requests\EventRequest $request) {
  $event = Event::where('user_id', Auth::user()->id)->findOrFail($id);

  $event->update(Request::all());
  return redirect('events')->with('message', 'Entry successfully modified!');
}




public function destroy($id, Request $request)
    {
       //$article = Article::where('user_id', Auth::user()->id)->findOrFail($id);
       //$article->delete();
       //return redirect()->route('articles.index')->with('message', 'Entry successfully deleted!');
       
       $event = Event::where('user_id', Auth::user()->id)->findOrFail($id);
       if ( Request::ajax() ) {
        $event->delete();

        return response(['msg' => 'Event deleted', 'status' => 'success']);
    } else {
       $event->delete();
       return redirect()->route('events.index')->with('message', 'Event successfully deleted!');
        
    }
    //return response(['msg' => 'Failed deleting the product', 'status' => 'failed']);    
        
    }



//ok
public function index()  {

$events = Event::where('user_id', Auth::user()->id)->latest()->Paginate(5);
return view('events.index', compact('events'));

}
//ok


public function store(Requests\EventRequest $request) {

 
    $events = new Event($request->all());
    
    Auth::user()->events()->save($events);



  //$events = Event::create(Request::all());
  return redirect()->route('events.index')->with('message', 'Event successfully created!');
}



    //
}
