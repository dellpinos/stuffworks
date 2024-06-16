<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {

        // API Consultar frase
        $url = "https://api.quotable.io/random";

        $respuesta = Http::get($url);

        if ($respuesta->successful()) {
            $quote = $respuesta->json();
            return view('home.index', [
                'quote' => $quote
            ]);
        } else {
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }
}
