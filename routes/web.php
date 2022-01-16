<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;


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
    return view('login');
});
route::get('/film', function(){
    return view('film');
});
route::get('/film2', function(){
    return view('film2');
});
route::get('/film3', function(){
    return view('film3');
});
route::get('/film4', function(){
    return view('film4');
});
route::get('/index', function(){
    return view('index');
});


Route::middleware(['check'])->group(function() {
    Route::get('/hello', [HelloController::class, 'index']);
    Route::get('/todo', [TodoController::class, 'index'])->name('index');
       
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');