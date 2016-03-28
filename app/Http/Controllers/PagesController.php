<?php

namespace App\Http\Controllers;
use DB;
use Request;
//use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use Carbon\Carbon;
use App\User;



class PagesController extends Controller
{

  public function create(){
return view('pages.create');

  }

  public function store(Requests\CreateEntryRequest $request) {

    //  $input = Request::all();
        //  $input['published_at'] = Carbon::now();
      //$input = Request::all();
      Article::create(Request::all());
      return redirect('view');
  }

  public function view()  {

$articles = Article::latest()->Paginate(5);


  return view('pages.view', compact('articles'));
  }

  public function schedule(){
  return view('pages.schedule');
  }

  public function progress(){
  return view('pages.progress');
  }

  public function show($id) {

    $article = Article::findOrFail($id);




    return view('pages.show', compact('article'));
  }

    //
}
