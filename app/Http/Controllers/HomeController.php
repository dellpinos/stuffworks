<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('home.index');
    }

    public function language_change($locale)
    {

        // Guardar el idioma en la sesión
        session(['locale' => $locale]);

        // Establecer el idioma en la aplicación
        App::setLocale($locale);

        // Redirigir al usuario a la página anterior
        return redirect()->back();
    }

    public function focus()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        // API consultar quote
        $url = "https://api.quotable.io/random";

        try {
            // Tiempo de respuesta máximo de 3 segs
            $respuesta = Http::timeout(3)->get($url);

            if ($respuesta->successful()) {
                $quote = $respuesta->json();

                return view('home.focus', [
                    'quote' => $quote

                ]);
            } else {
                // En caso de que la API no responda exitosamtente
                $quote = [
                    "author" => "Anonymous",
                    "content" => "Reputation is what other people know about you. Character is what you know about yourself."
                ];
                return view('home.focus', [
                    'quote' => $quote
                ]);
            }
        } catch (Exception $e) {
            // En caso de que la API no responda o se exceda el tiempo de respuesta
            $quote = [
                "author" => "Anonymous",
                "content" => "Reputation is what other people know about you. Character is what you know about yourself."
            ];
            return view('home.focus', [
                'quote' => $quote
            ]);
        }
    }
    public function focus_lotr()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('home.focus_lotr');
    }

    public function little_Apps()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('home.little_apps');
    }

    public function apps()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('home.apps');
    }

    public function contact()
    {
        $locale = session('locale', 'es'); // Obtener el locale de la sesión o 'en' por defecto
        App::setLocale($locale);
        return view('home.contact');
    }
}
