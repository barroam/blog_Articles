<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function liste_articles(){
       $articles = Article::all(); 
       return view('articles.liste', compact('articles'));
   
    }
    public function ajouter_articles(){
        return view('articles.ajouter');
    }
    public function details($id){
        $article = Article::find($id);
        return view('articles.detail',compact('article'));
    }

    public function sauvegarde(Request $request){
        Article::create($request->all());
       return redirect('/article');
    }






}