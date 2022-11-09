<?php


namespace App\Http\Controllers;


use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
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
         * Одной rubric принадлежит несколько post
         * Rubric->posts - ссылка на посты рубрики
         * Post->rubric - ссылка на рубрику поста
         */
//        $rubric = Rubric::find(1);
//        dump($rubric->posts);
//        $post = Post::find(3);
//        dump($post, $post->rubric, $post->rubric->title);

        // получение постов рубрики 1 по
//        $posts = Rubric::find(1)
//            ->posts()
//            ->select('title')
//            ->where('id', '>', '2')
//            ->get();
//        dump($posts);


        /**
         * получаем посты
         * ленивая загрузка - при обращении к значению связной сущности выполняется запрос
         * при каждом обращении к связной таблице будет происходить запрос
         */
//        $posts = Post::where('id', '>', 1)->get();
//        foreach ($posts as $post){
//            //"select * from `rubrics` where `id` = {$post->id} limit 1"
//            dump($post->title, $post->rubric->title);
//        }

        /**
         * получаем посты
         * жадная загрузка - получение одним запросом связных сущностей
         * with(название метода, хранящего ссылку на связную сущность)
         * один запрос по фильтру для разового получения всех связных сущностей
         */

        // select * from `rubrics` where `id` in (1, 3)
//        $posts = Post::with('rubric')
//            ->where('id', '>', 1)
//            ->get();
//        foreach ($posts as $post){
//            dump($post->title, $post->rubric->title);
//        }



        /**
         * Many To Many
         */
        // получаем пост и его теги
//        $post = Post::find(1);
//        dump($post->title);
//        foreach ($post->tags as $tag){
//            dump($tag->title);
//        }
        // получаем тег и его посты
//        $tag = Tag::find(1);
//        dump($tag->title);
//        foreach ($tag->posts as $post){
//            dump($post->title);
//        }
    }


    public function test(): string
    {
        return __METHOD__;
    }
}
