<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('main');
});

Route::post('/article', [
    'uses' => 'ArticleController@postArticle'
]);

Route::get('/articles', [
    'uses' => 'ArticleController@getArticles'
]);

Route::get('/article/{id}', [
    'uses' => 'ArticleController@getArticle'
]);

Route::delete('/article/{id}', [
    'uses' => 'ArticleController@deleteArticle'
]);

Route::post('ajax', [
    'as' => 'ajax', 'uses' => 'AjaxController@parseAction'
]);