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
$articles = Article::where('user_id', Auth::user()->id)->latest()->Paginate(5);
  return view('articles.index', compact('articles'));

  }


  public function show($id) {

    $article = Article::where('user_id', Auth::user()->id)->findOrFail($id);

    return view('articles.show', compact('article'));
  }

  public function create(){
return view('articles.create')->render();

  }

  public function store(Requests\EntryRequest $request) {

    $newarticle = new Article($request->all());
         if ( Request::ajax() ) {
    Auth::user()->articles()->save($newarticle);

        return response(['msg' => 'Entry saved', 'status' => 'success']);
    } else {
  
    Auth::user()->articles()->save($newarticle);
    
    return redirect('home')->with('message', 'Entry successfully saved!');
    }
  }




public function edit($id) {
   if ( Request::ajax() ) {
  
  $toedit = Article::where('user_id', Auth::user()->id)->findOrFail($id);
         return $toedit->toJson();

   }else {
         $article = Article::where('user_id', Auth::user()->id)->findOrFail($id);
  return view('articles.edit', compact('article'));
}
}

public function articlefeed() {
$articles = Article::where('user_id', Auth::user()->id)->latest()->Paginate(5);
    return $articles->toJson();

}

public function update($id, Requests\EntryRequest $request) {
  $article = Article::findOrFail($id);

if ( Request::ajax() ) {
      $article->update(Request::all());

}
 else {
  $article->update(Request::all());
  return redirect('articles');
 }
}

public function destroy($id, Request $request)
    {
       //$article = Article::where('user_id', Auth::user()->id)->findOrFail($id);
       //$article->delete();
       //return redirect()->route('articles.index')->with('message', 'Entry successfully deleted!');
       
       $article = Article::where('user_id', Auth::user()->id)->findOrFail($id);
       if ( Request::ajax() ) {
        $article->delete();

        return response(['msg' => 'Entry deleted', 'status' => 'success']);
    } else {
       $article->delete();
       return redirect()->route('articles.index')->with('message', 'Entry successfully deleted!');
        
    }
    //return response(['msg' => 'Failed deleting the product', 'status' => 'failed']);    
        
    }


    //
}
