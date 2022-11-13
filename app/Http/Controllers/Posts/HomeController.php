<?php


namespace App\Http\Controllers\Posts;


use App\Http\Controllers\Controller;
use App\Post;
use App\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
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
        return redirect()->route('home');
    }


}
