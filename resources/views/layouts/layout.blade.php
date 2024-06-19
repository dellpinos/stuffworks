<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>@yield('titulo')</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">

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
                        <i class="header__icono fa-solid fa-radiation" id="header-icon"></i>
                    </div>
                    <div class="header__icono-opts" id="header-icono-opts">
                        <p id="header-icon-display-one"></p>
                        <p id="header-icon-display-two"></p>

                    </div>
                </div>

                <a href="{{ route('home') }}">
                    <h1 class="header__heading">Stuff and other works</h1>
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

    <div class="contenedor contenedor__grid">

        <main>
            @yield('contenido')
        </main>

        <sidebar class="sidebar">

            <div class="sidebar__entrada">
                <a href="{{ route('scripts.word_flip') }}">WordFlip</a>
            </div>
            <div class="sidebar__entrada">
                <a href="{{ route('scripts.to_camel') }}">camelCase</a>
            </div>
            <div class="sidebar__entrada">
                <a href="{{ route('scripts.cuadricula') }}">Cuadricula</a>
            </div>
            <div class="sidebar__entrada">
                <a href="{{ route('scripts.hashtag') }}">#Hashtag</a>
            </div>
            <div class="sidebar__entrada">
                <a href="{{ route('scripts.hexa') }}">Hexa</a>
            </div>
            <div class="sidebar__entrada">
                <a href="{{ route('scripts.likes') }}">Likes</a>
            </div>

        </sidebar>

    </div>

    <footer class="footer__contenedor">

        <p>Martín del Pino - Todos los derechos reservados &copy; {{ date('Y') }}</p>
    </footer>

    @vite('resources/js/app.js')

</body>

</html>
