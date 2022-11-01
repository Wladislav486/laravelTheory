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
    return view('home');
})->name('home');

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
 * централизация изменения url для работы с формами
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




/**
 * параметры маршрута
 */
//Route::get('/post/{id}/{slug}', function ($id, $slug){
//    return "Post $id | $slug";
//})->where(['id' => '[0-9]+', 'slug' => '[a-zA-Z0-9-]+']);


/**
 * необязательные параметры маршрута
 * знак вопроса делает необязательным
 */
Route::get('/post/{id?}/{slug?}', function ($id = 0, $slug = ''){
    return "Post $id | $slug";
});




/**
 * группировка правил
 * ко всем url добавится впереди admin
 */

Route::prefix('admin')->group(function (){
    Route::get('/posts', function (){
        return "Post list";
    });

    Route::get('/posts/create', function (){
        return "Post create";
    });

    Route::get('/posts/{id}/edit', function ($id){
        return "Post Post $id";
    });
});



/**
 * Форма(action=POST|GET). Подмена метода передачи данных.(action=PUT|DELETE...)
 */

Route::any('/contact_edit_method', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact_edit_method');
})->name('contact_edit_method');




/**
 * приоритет правил по url
 * более конкретные правила распологать выше более общих
 */

//Route::get('/post/{id}/edit', function ($id){
//    return "Post Post $id";
//});
//
//Route::get('/post/{id?}/{slug?}', function ($id = 0, $slug = ''){
//    return "Post $id | $slug";
//});


/**
 * приоритет правил по названию маршрутов
 */

Route::get('/post/{id}/{slug?}', function ($id = 0, $slug = ''){
    return "Post $id | $slug";
})->name('post');

//перезапишет верхнее если не прописать имя маршрута
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/post/{id}/edit', function ($id){
        return "Post Post $id";
    })->name('post');
});


/**
 * перенаправление 404
 */
Route::fallback(function (){
//   return redirect()->route('home');
    abort('404', 'Page not found');
});
















