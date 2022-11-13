<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class BladeController extends Controller
{

    public function index()
    {
        $title = 'Blade page';
        $h1 = '<h1>Blade page</h1>';
        return view('bladeTemplates.template', compact('title', "h1"));
    }

}
