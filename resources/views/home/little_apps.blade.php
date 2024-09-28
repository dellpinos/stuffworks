@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Small Apps & More
@endsection

@section('main-content')

<div class="little-apps">
    <div class="little-apps__grid">
        <a class="little-apps__enlace" href="https://spectacular-axolotl-4c9622.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_calorias') }}</h3>
                <img src="{{ asset('img/react.svg') }}" alt="Icono react">
                <p>{{ __('little_apps.little_t_calorias') }}</p>
            </div>
            <ul>
                <li>>_ React</li>
                <li>>_ TypeScript</li>
                <li>>_ Vite</li>
                <li>>_ HTML5</li>
                <li>>_ CSS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://dapper-ganache-049064.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_crypto') }}</h3>
                <img src="{{ asset('img/react.svg') }}" alt="Icono react">
                <p>{{ __('little_apps.little_d_crypto') }}</p>
            </div>
            <ul>
                <li>>_ React</li>
                <li>>_ JavaScript</li>
                <li>>_ Vite</li>
                <li>>_ HTML5</li>
                <li>>_ CSS</li>
                <li>>_ CriptoCompare API</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://cozy-stardust-e7c07f.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_cocktail') }}</h3>
                <img src="{{ asset('img/react.svg') }}" alt="Icono react">
                <p>{{ __('little_apps.little_d_cocktail') }}</p>
            </div>
            <ul>
                <li>>_ React</li>
                <li>>_ TypeScript</li>
                <li>>_ Vite</li>
                <li>>_ REST API</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://superlative-crumble-b5398d.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_gestor') }}</h3>
                <img src="{{ asset('img/typescript.svg') }}" alt="Icono typescript">
                <p>{{ __('little_apps.little_d_gestor') }}</p>
            </div>
            <ul>
                <li>>_ TypeScript</li>
                <li>>_ React</li>
                <li>>_ Context API</li>
                <li>>_ Reducers</li>
                <li>>_ Libraries</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://coruscating-starburst-07e5b7.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_propina') }}</h3>
                <img src="{{ asset('img/typescript.svg') }}" alt="Icono typescript">
                <p>{{ __('little_apps.little_d_propina') }}</p>
            </div>
            <ul>
                <li>>_ TypeScript</li>
                <li>>_ React</li>
                <li>>_ Vite</li>
                <li>>_ HTML5</li>
                <li>>_ CSS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://superlative-alpaca-2eb90a.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_turnos') }}</h3>
                <img src="{{ asset('img/react.svg') }}" alt="Icono react">
                <p>{{ __('little_apps.little_d_turnos') }}</p>
            </div>
            <ul>
                <li>>_ React</li>
                <li>>_ JavaScript</li>
                <li>>_ Vite</li>
                <li>>_ HTML5</li>
                <li>>_ CSS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://fancy-zabaione-407e7d.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_google') }}</h3>
                <img src="{{ asset('img/html5.svg') }}" alt="Icono html">
                <p>{{ __('little_apps.little_d_google') }}</p>
            </div>
            <ul>
                <li>>_ HTML</li>
                <li>>_ CSS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://gilded-banoffee-fdd115.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_clima') }}</h3>
                <img src="{{ asset('img/typescript.svg') }}" alt="Icono typescript">
                <p>{{ __('little_apps.little_d_clima') }}</p>
            </div>
            <ul>
                <li>>_ TypeScript</li>
                <li>>_ ZOD</li>
                <li>>_ Vite</li>
                <li>>_ HTML5</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://warm-pavlova-8a3cb4.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_acustore') }}</h3>
                <img src="{{ asset('img/typescript.svg') }}" alt="Icono typescript">
                <p>{{ __('little_apps.little_d_acustore') }}</p>
            </div>
            <ul>
                <li>>_ TypeScript</li>
                <li>>_ Vite</li>
                <li>>_ HTML5</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://blogcafedellpinos.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_cafe') }}</h3>
                <img src="{{ asset('img/html5.svg') }}" alt="Icono html">
                <p>{{ __('little_apps.little_d_cafe') }}</p>
            </div>
            <ul>
                <li>>_ HTML5</li>
                <li>>_ CSS / SASS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://heroic-unicorn-c41bea.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_rock') }}</h3>
                <img src="{{ asset('img/sass.svg') }}" alt="Icono sass">
                <p>{{ __('little_apps.little_d_rock') }}</p>
            </div>
            <ul>
                <li>>_ SASS</li>
                <li>>_ HTML</li>
                <li>>_ JavaScript</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://effulgent-alfajores-d661a7.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_tienda') }}</h3>
                <img src="{{ asset('img/css3.svg') }}" alt="Icono css">
                <p>{{ __('little_apps.little_d_tienda') }}</p>
            </div>
            <ul>
                <li>>_ CSS</li>
                <li>>_ HTML5</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://proyectohtmlcss0001.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_freelance') }}</h3>
                <img src="{{ asset('img/html5.svg') }}" alt="Icono html">
                <p>{{ __('little_apps.little_d_freelance') }}</p>
            </div>
            <ul>
                <li>>_ HTML5</li>
                <li>>_ CSS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://resplendent-mooncake-4f4b06.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_calc2') }}</h3>
                <img src="{{ asset('img/javascript.svg') }}" alt="Icono Javascript">
                <p>{{ __('little_apps.little_t_calc2') }} - unfinished -</p>
            </div>
            <ul>
                <li>>_ JavaScript</li>
                <li>>_ HTML</li>
                <li>>_ SASS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://prueba12323.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_calc1') }}</h3>
                <img src="{{ asset('img/javascript.svg') }}" alt="Icono Javascript">
                <p>{{ __('little_apps.little_d_calc1') }} - unfinished -</p>
            </div>
            <ul>
                <li>>_ JavaScript</li>
                <li>>_ HTML</li>
                <li>>_ CSS</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://mellow-raindrop-25bccb.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_ejem') }}</h3>
                <img src="{{ asset('img/sass.svg') }}" alt="Icono sass">
                <p>{{ __('little_apps.little_d_ejem') }} - unfinished -</p>
            </div>
            <ul>
                <li>>_ HTML</li>
                <li>>_ SASS</li>
                <li>>_ JavaScript</li>
            </ul>
        </a>
        <a class="little-apps__enlace" href="https://imaginative-kleicha-d8ead1.netlify.app/" target="_blank">
            <div>
                <h3>{{ __('little_apps.little_t_btns') }}</h3>
                <img src="{{ asset('img/css3.svg') }}" alt="Icono css">
                <p>{{ __('little_apps.little_d_btns') }}</p>
            </div>
            <ul>
                <li>>_ CSS</li>
                <li>>_ HTML</li>
            </ul>
        </a>
    </div>
</div>
@endsection