<?php

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

Auth::routes();

Route::get('/', function () {
    // $verses = Auth::user()->verses;
    // $verses->sortByDesc('started_at');
    $verses = Auth::user()->verses()->whereNotNull('started_at')->orderBy('started_at', 'desc')->get();
    return view('biblememory', ['verses' => $verses]);
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
