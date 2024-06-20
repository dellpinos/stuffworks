<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function focus()
    {
        // API Consultar frase
        $url = "https://api.quotable.io/random";

        $respuesta = Http::get($url);

        if ($respuesta->successful()) {
            $quote = $respuesta->json();
            return view('home.focus', [
                'quote' => $quote
            ]);
        } else {
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }

    public function little_Apps()
    {
        return view('home.little_apps');
    }

    public function apps()
    {
        return view('home.apps');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
