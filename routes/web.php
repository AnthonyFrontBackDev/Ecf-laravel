<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'accueil'])->name('accueil'); // execute la fonction accueil contenu dans le MainController


Auth::routes(); // Routes de création de compte , connexion de compte / (package laravel ui)

Route::post('/', [ArticleController::class, 'create'])->name('accueil');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');


Route::get('/', [MainController::class, 'articles']);
