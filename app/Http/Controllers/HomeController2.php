<?php


namespace App\Http\Controllers;


class HomeController2 extends Controller
{

    public function index()
    {

        dump($_ENV['MY_SETTING']);
        dump(env('MY_SETTING'));
        dump(config('app.timezone'));
        dump(config('database.connections.mysql.database'));

        return view('home_1', ['res' => 5, 'name' => 'Jhon']);
    }


    public function test(): string
    {
        return __METHOD__;
    }
}
