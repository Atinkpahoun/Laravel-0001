<?php

use App\Http\Controllers\show;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::Post('/articles',[ArticleController::class, 'Store']);

Route::get('/accueil',[ArticleController :: class, 'index']);
Route::get('/articles/{id}', [ArticleController:: class, 'show'])->name('articles.show');