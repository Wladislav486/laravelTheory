<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class Blade1Controller extends Controller
{

    public function index()
    {
        $title = 'Blade1 page';
        $h1 = 'Blade1 page';
        return view('bladeTemplates.template1', compact('title', 'h1'));
    }

}
