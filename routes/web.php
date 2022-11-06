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


/**
 * контроллеры
 */
//Route::get('/', 'HomeController@index');
//Route::get('/test', 'HomeController@test');
//Route::get('/test2', 'Test\TestController@index');
//Route::get('/page/{slug}', 'PageController@show');

/**
 * контроллеры ресурсов
 * https://laravel.su/docs/8.x/controllers
    https://skr.sh/sGhnEppJB0a
 */
Route::resource('/posts', 'PostController');
/**
 * переопределение названия параметра при
 * просмотре, изменении и удалении записи
 * поменять в ссылках при переопределении
 */
//Route::resource('/posts', 'PostController', ['parameters' => [
//    'posts' => 'id'
//]]);


/**
 * перенаправление 404
 */
Route::fallback(function (){
//   return redirect()->route('home');
    abort('404', 'Page not found');
});


/**
 * queryBuilder
 */
//Route::get('/', 'QueryBuilderController@index');

/**
 * orm
 */
Route::get('/', 'OrmController@index');









