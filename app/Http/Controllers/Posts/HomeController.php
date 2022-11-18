<?php


namespace App\Http\Controllers\Posts;


use App\Http\Controllers\Controller;
use App\Post;
use App\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        /**
         * сессии
         */
        //запись в сессию
       // $request->session()->put('test', 'Test value');
//        session(['cart' => [
//            'id' => 1,
//            'title1' => 'Product 1',
//            'title2' => 'Product 2',
//        ]]);

        //получение значений из сесси по ключу
//        dump(session('test'));
//        dump(session('cart'))['id'];
//        dump($request->session()->get('cart')['id']);

        //добавление данных в сессию
//        $request->session()->push('cart', ['id' => 3, 'title' => 'Title 3']);

        //удаление данных из сессии с выводом
       // dump($request->session()->pull('test'));
        //без вывода
        //$request->session()->forget('test');

        // очистка всех данных из сессии
        //$request->session()->flush();


        //dump($request->session()->all());
        //dump(session()->all());


        /**
         * куки
         */
       // Cookie::queue('test', 'Test value', 1);
       // Cookie::queue(Cookie::forget('test'));
      //  dump(Cookie::get('test'));
      //  dump($request->cookie('test'));


        /**
         * Кеш
         */
        //положить в кеш на 3 мин
        //Cache::put('key', 'Value', 240);
        //положить на неограниченный срок
        //Cache::put('key', 'Value');
        //Cache::forever('key', 'Value');
       //dump(Cache::get('key'));

        //очишение кеша
//        Cache::put('key', 'Value', 240);
        //dump(Cache::pull('key'));
//        Cache::forget('key');
//        dump(Cache::get('key'));
        //очишение кеша полностью
//        Cache::flush();

        //кеширование запросов к бд
//        if(Cache::has('posts')){
//            $posts = Cache::get('posts');
//        }else{
//            $posts = Post::orderBy('id', 'desc')->get();
//            Cache::put('posts', $posts);
//        }

        /**
         * пагинация
         */
        $posts = Post::orderBy('id', 'desc')->paginate(3);


        $title = 'Posts list';

        return view('valid.index', compact('title', 'posts'));
    }

    public function create()
    {
        $rubrics = Rubric::pluck('title', 'id')->all();
        $title = 'Create';
        return view('valid.create', compact('title', 'rubrics'));
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        dump($request->input('title'));
//        dump($request->input('content'));
//        dd($request->input('rubric_id'));


        /**
         * ошибки будут доступны в специальном массиве
         */
        //вариант 1
        $this->validate($request,[
            'title' => 'required|min:2|max:100',
            'content' => 'required',
            'rubric_id' => 'integer'
        ]);

        //вариант 2
//        $rules = [
//            'title' => 'required|min:2|max:100',
//            'content' => 'required',
//            'rubric_id' => 'integer'
//        ];
//        $messages = [
//            'title.required' => 'Заполните поле название.',
//            'title.min' => 'инимум 5 символов в названии.',
//            'rubric_id.integer' => 'выбирите рубрику из списка.'
//        ];
//
//        $validator = Validator::make($request->all(), $rules, $messages)->validate();

        /**
         * массовое присваивание
         */
        Post::create($request->all());
        /**
         * флеш сообщения
         */
        $request->session()->flash('success', 'Данные сохранены!');
        return redirect()->route('home');
    }


}
