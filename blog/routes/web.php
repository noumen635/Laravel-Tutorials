<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return 'Hello, World!';
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::get('post/{slug}', [PostController::class, 'show']);

Route::get('/', IndexController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [IndexController::class, 'index']);
