<?php

use App\Models\Article;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Simple API fort articles
//  1. get all (GET) /api/articles
//  2. create article (POST) /api/articles
//  3. get a single article (GET) /api/article/{id}
//  4. update an article (PUT/PATCH) /api/article/{id}
//  5. delete an article (DELETE) /api/article/{id}


Route::get('/articles', 'App\Http\Controllers\ArticleController@index');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticleController@index');

Route::post('/articles', 'App\Http\Controllers\ArticleController@store');
Route::put('/articles/{article}', 'App\Http\Controllers\ArticleController@index');
Route::delete('/articles/{article}', 'App\Http\Controllers\ArticleController@index');






// Steps:
// 1. Create DB and Migrations
// 2. 


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
