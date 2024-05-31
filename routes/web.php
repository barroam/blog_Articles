<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

//la route du page d'accueil 
Route::get('/article',[ArticleController::class,'liste_articles']);
//la route du page contenant le details des articles du pages d'accueil
Route::get('/article/{id}',[ArticleController::class,'details']);
// la route du page d'ajoute d'un article 
Route::get('/ajouter',[ArticleController::class,'ajouter_articles']);
// la route du page de la sauvegarde d'ajoute d'un articles
Route::post('/article/sauvegarde',[ArticleController::class,'sauvegarde']);
