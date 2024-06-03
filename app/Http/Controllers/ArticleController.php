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
        
        $request->validate([
            'titre' => 'required|max:255',
            'description' => 'required',
            'a_la_une' => 'required',
            'url_image' => 'required',
        ]);
        // Article::create($request->all());
        $article = new Article();
         $article->titre = $request->titre;
         $article->description = $request->description;
        $article->url_image = $request->url_image;
         $article->a_la_une = $request->a_la_une === 'on' ? 1 : 0;
     
       $article->save();
       return redirect('/article')->with('status','ajouter avec succes');
    }
    public function modifier_articles($id){
     

      $article = Article::find($id);
        return view('articles.modifier',compact('article'));
    }

    public function mise_a_jour_articles (Request $request){
        
        $request->validate([
            'titre' => 'required|max:255',
            'description' => 'required',
            'a_la_une' => 'nullable',
            'url_image' => 'required',
        ]);

        $article = Article::findOrFail($request->id);
        $article->titre = $request->titre;
        $article->description = $request->description;
       $article->url_image = $request->url_image;
        $article->a_la_une = $request->a_la_une === 'on' ? 1 : 0;

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