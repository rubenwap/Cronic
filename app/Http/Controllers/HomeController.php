<?php

namespace App\Http\Controllers;
use DB;
use Request;
//use Illuminate\Http\Request;
use App\Article;
use App\Event;
use App\Http\Requests;
use Carbon\Carbon;
use App\User;
use App\Setting;
use App\Allergen;
use Auth;
use Redirect;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $articles = Article::latest()->take(1)->get();
      $oneWeek = Carbon::now()->subWeek();
      $events = Event::whereBetween('start', [Carbon::now(),Carbon::now()->addDays(7) ])->get();
      $articlesPain = Article::where('created_at', '>=', Carbon::now()->startOfMonth())->get();

        return view('home', compact(['articles','events','articlesPain']));

    }

    public function calfeed() {
      $calfeed = Event::all(['id', 'title', 'start', 'end']);
      return $calfeed->toJson();
    }

    public function progress(){

      $articles = Article::where('created_at', '>=', Carbon::now()->startOfMonth())->get();
    return view('pages.progress', compact('articles'));


    }

public function settings() {
  $settings = Setting::latest()->take(1)->get();
$name = Auth::user()->name;
$surname = Auth::user()->surname;
$allergens = Allergen::all();
$doctors = User::where('isdoctor', '=', 'yes')->get();

return view('pages.settings',compact(['name','surname','allergens','doctors','settings']));

}

public function editset() {
$settings = Setting::latest()->take(1)->get();
$name = Auth::user()->name;
$surname = Auth::user()->surname;
$allergens = Allergen::all();
$doctors = User::where('isdoctor', '=', 'yes')->get();

return view('pages.editsettings',compact(['name','surname','allergens','doctors','settings']));

}


public function settingssave(Requests\SettingRequest $request) {
 
  
  
 // $settings = Setting::latest()->take(1)->get();
  //$name = Auth::user()->name;
  //$surname = Auth::user()->surname;
 // $allergens = Allergen::all();
 // $doctors = User::where('isdoctor', '=', 'yes')->get();
  
  
   $setting = new Setting($request->all());
    
    Auth::user()->settings()->save($setting);
  //return redirect()->route('events.index')->with('message', 'Event successfully created!');

    return redirect()->route('settings')->with('message', 'Profile updated correctly!');

 //Auth::user()->events()->Setting::create(Request::all());
  //return view('pages.settings', compact(['name','surname','allergens','doctors','settings']))->withInput()->withErrors('message', 'Profile successfully updated!');



}





}
