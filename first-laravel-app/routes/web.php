<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ArticleController::class, 'index']);

Route::get('/add', [ArticleController::class, 'add']);

Route::post('/add', [ArticleController::class, 'record']);

Route::get('/display/{id}', [ArticleController::class, 'display']);

Route::get('/delete/{id}', [ArticleController::class, 'delete']);

Route::get('/modify/{id}', [ArticleController::class, 'modify']);

Route::post('/modify/{id}', [ArticleController::class, 'update']);

?>