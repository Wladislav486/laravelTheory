<?php

namespace App\Http\Controllers\ViewComposer;

use App\Http\Controllers\Controller;
use App\Rubric;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $rubrics = Rubric::all();
        return view('ViewComposer.ViewComposer', compact('rubrics'));
    }
}
