<?php


namespace App\Http\Controllers;


use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use Illuminate\Support\Facades\DB;

class OrmController extends Controller
{

    public function index()
    {
        /**
         * добавление новой записи в табличку posts
         */
        //вариант 1
//        $post = new Post();
//        $post->title = 'Статья 2';
//        $post->content = "Lorem ipsum...";
//        $post->save();

        // вариант 2
//        Post::create(['title' => 'Post 5', 'content' => 'Lorem ipsum 5']);

        //вариант 3
//        $post = new Post();
//        $post->fill(['title' => 'Post 5', 'content' => 'Lorem ipsum 5']);
//        $post->save();

        /**
         * обновление записи
         */
//        $post = Post::find(5);
//        $post->content = 'Lorem ipsum 5';
//        $post->save();
        //массовое изменение поля
//        Post::where('id', '>', 3)
//            ->update(['updated_at' => NOW()]);

        /**
         * удаление записи/ей
         */
//        $post = Post::find(5);
//        $post->delete();

        // если нет записи то исключения не будет в отличии от delete
//        $post = Post::destroy(5);
//        $post = Post::destroy([4, 5, 6]);



        /**
         * получить все записи
         */
//        $data = Country::all();
        /**
         * конструктор запросов для модели
         */
//        $data = Country::limit(5)->get();
        // то же самое
//        $data = Country::query()
//            ->limit(5)
//            ->get();
//        $data = Country::where('Code', '<', 'ALB')
//            ->select('Code', 'Name')
//            ->offset(1)
//            ->limit(2)
//            ->get();
        /**
         * получение записи по id
         */
 //       $data = City::find(5);
  //      $data = Country::find("AGO");



        //dd($data);

        /**
         * One To One
         */
//        $post = Post::find(2);
//        dump($post, $post->rubric, $post->rubric->title);
//        $rubric = Rubric::find(3);
//        dump($rubric->title, $rubric->post->title);

        /**
         * One To Many
         */
//        $rubric = Rubric::find(1);
//        dump($rubric->posts);
//        $post = Post::find(3);
//        dump($post, $post->rubric, $post->rubric->title);
    }


    public function test(): string
    {
        return __METHOD__;
    }
}
