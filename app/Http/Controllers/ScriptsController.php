<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScriptsController extends Controller
{
    public function index()
    {
        return view('scripts.index');
    }
    public function cuadricula()
    {
        return view('scripts.cuadricula');
    }

    public function hashtag()
    {
        return view('scripts.hashtag');
    }
    public function hexa()
    {
        return view('scripts.hexa');
    }
    public function likes()
    {
        return view('scripts.likes');
    }
    public function to_camel()
    {
        return view('scripts.to_camel');
    }
    public function word_flip()
    {
        return view('scripts.word_flip');
    }


}
