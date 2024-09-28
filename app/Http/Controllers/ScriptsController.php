<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ScriptsController extends Controller
{
    public function index()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('scripts.index');
    }
    public function cuadricula()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('scripts.cuadricula');
    }

    public function hashtag()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('scripts.hashtag');
    }
    public function hexa()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('scripts.hexa');
    }
    public function likes()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('scripts.likes');
    }
    public function to_camel()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('scripts.to_camel');
    }
    public function word_flip()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('scripts.word_flip');
    }


}
