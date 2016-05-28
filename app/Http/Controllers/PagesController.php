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



class PagesController extends Controller
{

  public function index()  {
      
//\Auth::user();

$articles = Article::latest()->Paginate(5);
  return view('articles.index', compact('articles'));

  }


  public function show($id) {

    $article = Article::findOrFail($id);

    return view('articles.show', compact('article'));
  }

  public function create(){
return view('articles.create')->render();

  }

  public function store(Requests\EntryRequest $request) {

    $article = new Article($request->all());
    
    Auth::user()->articles()->save($article);
    

    return redirect('home')->with('message', 'Entry successfully saved!');
  }




public function edit($id) {
  $article = Article::findOrFail($id);

  return view('articles.edit', compact('article'));
}


public function update($id, Requests\EntryRequest $request) {
  $article = Article::findOrFail($id);

  $article->update(Request::all());
  return redirect('articles');
}

public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('message', 'Entry successfully deleted!');
    }


    //
}
