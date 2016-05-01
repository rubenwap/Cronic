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


        return view('home', compact('articles'));

    }

    public function calfeed() {
      $calfeed = Event::all(['id', 'title', 'start', 'end']);
      return $calfeed->toJson();
    }

    public function progress(){

      $articles = Article::where('created_at', '>=', Carbon::now()->startOfMonth())->get();
    return view('pages.progress', compact('articles'));


    }





}
