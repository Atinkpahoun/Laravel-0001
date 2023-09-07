<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;


use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index() 
    { 
        $articles =Article::all();
        return view('accueil', [
            'articles' =>$articles
        ]);

   
    }
    public function store(Article $article,ArticleRequest $request)
    {
       Article::create([
            'titre' => $request->titre,
            'description' =>$request->description
       ]);
       return redirect()-> back()->with ('succes','L\'article a été bel et bien enrégistré');
    }

    public function show($id) {
        
          $article= Article::find($id);
         return view('articles.show',[
            'article'=> $article
         ]);
    }
       

    
    
}
?>