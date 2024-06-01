<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
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
       return redirect('/article')->with('status','ajouter avec succes');
    }
    public function modifier_articles($id){
      $article = Article::find($id);
        return view('articles.modifier',compact('article'));
    }

    public function mise_a_jour_articles(Request $request){
        $article = Article::find($request->id);
        $article->titre=$request->titre;
        $article->description= $request->description;
        $article->url_image= $request->url_image;
        $article->a_la_une= $request->a_la_une;
        $article->update();
        return redirect('/article')->with('status','modifier avec succes');
    }

    public function supprime_articles($id){
            $article=Article:: find($id);
            $article->delete();
           return redirect('/article')->with('status','supprimer avec succes');
            
    }
 
    public function details_commentaires($id){
        $article = Article::find($id);
        $commentaires = Commentaire::all()->where('article_id',$id) ;
       return view('articles.detail',compact('article','commentaires'));
    }
   


}