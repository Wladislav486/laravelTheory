<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class BladeController extends Controller
{

    public function index()
    {
        return view('bladeTemplates.template');
    }

}
