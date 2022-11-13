<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class BladeController extends Controller
{

    public function index()
    {
        $title = 'Blade page';
        $h1 = '<h1>Blade page</h1>';
        $data1 = range(1, 20);
        $data2 = [
            'title' => 'Title',
            'content' => 'Content',
            'keys' => 'Keywords'
        ];
        return view('bladeTemplates.template', compact('title', "h1", 'data1', 'data2'));
    }

}
