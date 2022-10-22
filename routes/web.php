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
    return view('welcome');
});

//Route::get('/', function (){
//    return '<h1>hello world</h1>';
//});

//Route::get('/', function (){
//    $res = 2+3;
//    $name = 'John';
//    return view('home', ['name' => $name])->with('res', $res);
//});

//Route::get('/about', function (){
//    return '<h1>About</h1>';
//});

/**
 * Обработка http запросов
 */
//Route::get('/contact', function (){
//    return view('contact');
//});
//
//
//Route::post('/send-email', function (){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return 'send';
//});



/**
 * обработка сразу нескольких видов http запросов
 */
//Route::match(['post', 'get'],'/contact', function (){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//});

//Route::any('/contact', function (){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//});


/**
 * именнованые маршруты
 * централизация изменения url
 */
//Route::match(['post', 'get'],'/contact', function (){
Route::match(['post', 'get'],'/contact2', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');


/**
 * роутинг статических страниц
 */
Route::view('/test', 'test', ['test' => 'Test data']);


/**
 * редиректы
 */
Route::redirect('/about', '/contact2', 301);




