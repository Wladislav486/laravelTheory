<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class Blade1Controller extends Controller
{

    public function index()
    {
        return view('bladeTemplates.template1');
    }

}
