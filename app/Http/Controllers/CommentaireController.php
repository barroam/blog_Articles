<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function ajouter_commentaires(Request $request){
      Commentaire::create($request->all());
      return redirect()->back();
    }

}
