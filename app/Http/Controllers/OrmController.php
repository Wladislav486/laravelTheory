<?php


namespace App\Http\Controllers;


use App\Post;
use Illuminate\Support\Facades\DB;

class OrmController extends Controller
{

    public function index()
    {
        $post = new Post();
        $post->title = 'Статья 2';
        $post->content = "Lorem ipsum...";
        $post->save();
    }


    public function test(): string
    {
        return __METHOD__;
    }
}
