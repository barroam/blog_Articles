<?php

use App\Http\Controllers\ArticleController;
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