<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Este código no funciona porque la sesión no es persistente, por default Laravel almacena la sesión en la DB
        // Este proyecto no tiene DB y ni puede recuperar esta información

        // // Establecer el idioma de la aplicación
        // if (Session::has('locale')) {
        //     dd('1');
        //     App::setLocale(Session::get('locale'));
        // } else {
        //     // Si no hay un idioma en la sesión, configurar uno por defecto
        //     $preferredLocale = $request->getPreferredLanguage(['en', 'es']); // Idiomas disponibles
        //     Session::put('locale', $preferredLocale);
        //     App::setLocale($preferredLocale);
        // }

        return $next($request);
    }
}
