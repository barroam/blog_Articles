<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function ajouter_commentaires(Request $request){
      Commentaire::create($request->all());
      return redirect()->back();
    }
    public function modifier_commentarires($id){
      $commentaire = Commentaire::findOrFail($id);
      return view('commentaires.comment',compact('commentaire'));
    }
    
    public function mise_a_jour_commentaires(Request $request,$id){
     

      $commentaire = Commentaire::findOrFail($id);
    $commentaire->id = $request->input('id');
    $commentaire->contenu = $request->input('contenu');
    $commentaire->auteur = $request->input('auteur');
   $commentaire->update();

      
      return redirect()->route('commentaires.comment')->with('status','modifier avec succes');
    }

public function supprime_commentaires($id){
  $commentaire = Commentaire::findOrfail($id);
  $commentaire->delete();
  return redirect()->back()->with('status','modifier avec succes');
}
    
}
