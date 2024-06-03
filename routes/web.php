<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

//la route du page d'accueil 
Route::get('/article',[ArticleController::class,'liste_articles']);
//la route du page contenant le details des articles du pages d'accueil
Route::get('/article/{id}',[ArticleController::class,'details']);
// la route du page d'ajoute d'un article 
Route::get('/ajouter',[ArticleController::class,'ajouter_articles']);
// la route du page de la sauvegarde d'ajoute d'un articles
Route::post('/article/sauvegarde',[ArticleController::class,'sauvegarde']);
// la route du page de la modification d'un article
Route::get('/article/modifier/{id}',[ArticleController::class,'modifier_articles']);
// la route du page de la mise a jour de modification d'un article
Route::post('/mise_a_jour',[ArticleController::class,'mise_a_jour_articles']);
//la route du page pour supprimer un article 
Route::get('supprime/{id}',[ArticleController::class,'supprime_articles']);
// la route du page details pour afficher les commentaires
Route::get('/article/{id}',[ArticleController::class,'details_commentaires']);


//la route du page  pour ajouter un commentaire
Route::post('/commentaire/ajouter_commentaire',[CommentaireController::class,'ajouter_commentaires']);
//la route du page commentaire pour modifier un commentaire
Route::get('/commentaire/comment/{id}',[CommentaireController::class,'modifier_commentarires']);
//la route du page commentaire pour le mise a jour d'un commentaire
Route::put('commentaire/update/{id}',[CommentaireController::class,'mise_a_jour_commentaires']);
// la route du page commentaire pour la suppression
Route::get('commentaire/supprime/{id}',[CommentaireController::class,'supprime_commentaires']);