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
//Route::resource('/posts', 'PostController');
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
//Route::get('/', 'OrmController@index');

/**
 * аблонизатор blade
 */
//Route::get('/', 'BladeController@index')->name('blade1');
//Route::get('/blade', 'Blade1Controller@index')->name('blade2');

/**
 * валидация
 */
// показ списка постов
Route::get('/', 'Posts\HomeController@index')->name('home');
//показ формы
Route::get('/create', 'Posts\HomeController@create')->name('posts.create');
// сохранение формы
Route::post('/', 'Posts\HomeController@store')->name('posts.store');



Route::match(['get', 'post'], '/send', 'ContactController@send')->name('send');


Route::match(['get', 'post'], '/send', 'ContactController@send')->name('send');




/**
 * регистрация
 */
//Route::get('/register', 'UserController@create')->name('register.create');
//Route::post('/register', 'UserController@store')->name('register.store');

/**
 * авторизация
 */
//Route::get('/login', 'UserController@loginForm')->name('login.create');
//Route::post('/login', 'UserController@login')->name('login');
//Route::get('/logout', 'UserController@logout')->name('logout');


/**
 * посредники(middleware)
 */

Route::group(['middleware'=> 'guest'], function (){
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');


Route::group(['middleware'=> 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/', 'MainController@index')->middleware('admin');
});


/**
 * ViewComposer
 */
Route::get('/ViewComposer', 'ViewComposer\MainController@index');




