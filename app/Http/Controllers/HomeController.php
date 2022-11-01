<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index()
    {
        return view('home_1', ['res' => 5, 'name' => 'Jhon']);
    }


    public function test(): string
    {
        return __METHOD__;
    }
}
