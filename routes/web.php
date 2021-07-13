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
    $p = DB::table('users')->get();
    return view('welcome', compact('p'));
});
Route::get('/game', function () {
    $p = DB::table('users')->get();
    return view('game', compact('p'));
});
Route::get('/Test', function () {
    $p = DB::table('users')->get();
    return view('Test', compact('p'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
