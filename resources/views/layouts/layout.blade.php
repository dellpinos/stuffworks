<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>@yield('titulo')</title>
    <meta name="description" content="Portfolio Martin del Pino">
    <link rel="icon" href="{{ asset('img/radiation_icon.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    @vite('resources/scss/app.scss')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="header__grid">
        <header class="header">
            <div class="header__contenedor">

                <div class="header__grid-icono">
                    <div class="header__contenedor-icono" id="header-icon-container">
                        {{-- <i class="header__icono fa-solid fa-radiation" id="header-icon"></i> --}}
                        <i class="header__icono fa-solid fa-gear" id="header-icon"></i>
                    </div>
                    <div class="header__icono-opts" id="header-icono-opts">
                        <p id="header-icon-display-one"></p>
                        <p id="header-icon-display-two"></p>

                    </div>
                </div>

                <a href="{{ route('home') }}">
                    <h1 class="header__heading">Stuff and Scripts</h1>
                </a>
            </div>

        </header>
        <div class="header__mensaje" id="header-mensaje-opts">
            <div class="header__mensaje-campo">
                <label for="mens-tolerancia">Tolerancia:</label>
                <input type="number" step=".1" id="mens-tolerancia" min=".1" max=".5">
            </div>
            <div class="header__mensaje-campo">
                <label for="mens-help">Ayuda:</label>
                <input type="checkbox" id="mens-help" checked>
            </div>
            <div class="header__mensaje-campo">
                <p>Victorias: <span id="mens-victories">0</span></p>
            </div>
            <div class="header__mensaje-campo">
                <p>Record: <span id="mens-record">0</span></p>
            </div>
        </div>

    </div>

    @yield('contenido')

    <div class="@if (request()->routeIs('scripts.likes')) footer__enlace--activo @endif">

    <footer class="footer__contenedor">
        <div class="footer__grid">
            <a href="{{ route('home.apps') }}" class="@if (request()->routeIs('home.apps')) footer__enlace--activo @endif">Apps Online</a>
            <a href="{{ route('home.little_apps') }}" class="@if (request()->routeIs('home.little_apps')) footer__enlace--activo @endif">Little Apps</a>
            <a href="{{ route('scripts.index') }}" class="@if (request()->routeIs('scripts.index')) footer__enlace--activo @endif">Challenges</a>
            <a href="{{ route('home.focus') }}" class="@if (request()->routeIs('home.focus')) footer__enlace--activo @endif">Focus Page</a>
            <a href="{{ route('home.focus_lotr') }}" class="@if (request()->routeIs('home.focus')) footer__enlace--activo @endif">Focus Ring</a>
            <a href="{{ route('home.contact') }}" class="@if (request()->routeIs('home.contact')) footer__enlace--activo @endif">Contact</a>
            {{-- <a href="https://www.linkedin.com/in/martin-del-pino/" target="_blank">LinkedIn</a> --}}
        </div>
        <a class="footer__nombre" href="https://dellpinos.com/" target="_blank"><span>Martín del Pino</span> - &copy;
            Todos los derechos reservados {{ now()->year }}</a>
    </footer>

    @vite('resources/js/app.js')

</body>

</html>