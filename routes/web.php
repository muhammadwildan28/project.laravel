<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/login',function() {
return view('login');
});
Route::get('/register',function() {
    return view('register');
});
Route::get('/flexbox',function() {
    return view('flexbox');
});
Route::get('/flexbox2',function() {
    return view('flexbox2');
});
Route::get('/flexbox3',function() {
    return view('flexbox3');
});
Route::get('/flexbox4',function() {
    return view('flexbox4');
});
