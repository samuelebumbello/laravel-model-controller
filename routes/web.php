<?php

use App\Http\Controllers\Guest\MyPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Il path rimane ('/')
Route::get('/', [MyPageController::class, "index"]) ->name('home');

//pagina del dettaglio
Route::get('/film/{slug}', [MyPageController::class, "movie_detail"]) ->name('movie_detail');

Route::get('/movies', [MyPageController::class, "movies"]) ->name('movies');
