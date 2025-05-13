<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LikeController;

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

Route::group(['middleware' => ['auth']], function() {
    //マイページ
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    //書籍のリソースルート
    Route::resource('messages', MessageController::class);
    //いいね関連
    Route::get('/likes', [LikeController::class, 'index'])->name('likes.index');
    Route::post('/likes', [LikeController::class, 'store'])->name('likes.store');
    Route::delete('/likes', [LikeController::class, 'destroy'])->name('likes.destroy');
});