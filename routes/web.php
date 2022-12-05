<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('auth.login');
});
/*
Route::get('/post', function () {
    return view('post.index');
});
Route::get('/post/create',[PostController::class,'create']);
*/

Route::resource('post', PostController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [PostController::class, 'index'])->name('home');


//Cuando se logea redirigir a index
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [PostController::class, 'index'])->name('home');
});