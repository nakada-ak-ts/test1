<?php

// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
  return view('welcome');
});

Route::get('/articles', function () {
  return view('articles.index', [
    'articles' => App\Article::latest()->get()
  ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/article/{article}', 'ArticlesController@show');
Route::get('/article/{article}/edit', 'ArticlesController@edit');
Route::get('/article/{article}', 'ArticlesController@update');
Route::get('/article/create', 'ArticlesController@create');
