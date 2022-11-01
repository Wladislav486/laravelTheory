<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function show($slug)
    {
        //return view('pages.' . $slug, ['slug' => $slug]);
        return view('pages.show', ['slug' => $slug]);
    }
}
