@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Focus Ring
@endsection

@section('main-content')
    <div class="focus-lotr__contenedor">

        <img class="focus-lotr__ring" src="{{ asset('img/ring.svg') }}" alt="Anillo unico">

        <div class="focus-lotr__up">

            <div class="focus-lotr__up-tasks">
                {{-- Elemento Visible --}}
                <div>
                    <h4>{{ __('lotr.lotr_notes') }}:</h4>
                    <form action="#" id="focus-lotr-tasks">
                        {{-- Js --}}
                    </form>
                </div>

                <p>One day all of those late nights and early mornings will pay off</p>
            </div>
            <div class="focus-lotr__up-hour">
                {{-- Elemento Visible --}}
                <p id="focus-lotr-fecha"></p>
                <p id="focus-lotr-hora"></p>
            </div>
            <div class="focus-lotr__up-fila focus-lotr__up-center">
                {{-- Elemento Visible --}}
                <div class="focus-lotr__up-crono ">
                    <form>
                        <div class="focus-lotr__btns" id="focus-ring-crono-btns">
                            <button id="focus-ring-crono-pause"><i class="fa-solid fa-pause"></i></button>
                            <button id="focus-ring-crono-reset"><i class="fa-solid fa-rotate"></i></button>
                            <button id="focus-ring-crono-sound"><i class="fa-solid fa-volume-xmark"></i></button>
                        </div>
                        <div>
                            <input type="text" placeholder="00" id="focus-ring-crono-hs">
                            <p>:</p>
                            <input type="text" placeholder="00" id="focus-ring-crono-mins">
                        </div>
                        <button class="focus-lotr__btn-op" id="focus-ring-crono-btn"><i
                                class="fa-regular fa-circle-play"></i></button>
                    </form>
                </div>
            </div>

            <div class="focus-lotr__links">
                <h3>{{ __('lotr.lotr_tools') }}</h3>
                {{-- Elemento Visible --}}
                <div class="focus-lotr__links-grid">
                    <a href="https://trello.com/" target="_blank" id="focus-lotr-link-trello"><i
                            class="fa-brands fa-trello"></i></a>
                    <a href="https://es.lipsum.com/" target="_blank" id="focus-lotr-link-lorem"><i
                            class="fa-solid fa-align-left"></i></a>
                    <a href="https://fonts.google.com/" target="_blank" id="focus-lotr-link-fonts"><i
                            class="fa-solid fa-font"></i></a>
                    <a href="https://www.svgrepo.com/" target="_blank" id="focus-lotr-link-svgpro"><i
                            class="fa-solid fa-triangle-exclamation"></i></a>
                    <a href="https://fontawesome.com/search" target="_blank" id="focus-lotr-link-icons"><i
                            class="fa-solid fa-icons"></i></a>
                    <a href="https://resizeimage.net/" target="_blank" id="focus-lotr-link-resize"><i
                            class="fa-solid fa-image"></i></a>
                    <a href="https://randomcolour.com/" target="_blank" id="focus-lotr-link-random"><i
                            class="fa-solid fa-droplet"></i></a>
                    <a href="https://paletadecolores.online/" target="_blank" id="focus-lotr-link-pallette"><i
                            class="fa-solid fa-paint-roller"></i></a>
                    <a href="https://color.adobe.com/es/create/color-wheel" target="_blank" id="focus-lotr-link-wheel"><i
                            class="fa-solid fa-palette"></i></a>
                    <a href="https://pixabay.com/" target="_blank" id="focus-lotr-link-music"><i
                            class="fa-solid fa-music"></i></a>
                </div>
            </div>

            <div class="focus-lotr__sounds">
                {{-- Elemento Visible --}}
                <h3>{{ __('lotr.lotr_sounds') }}</h3>
                <div class="focus-lotr__sounds-grid">
                    <button class="focus-lotr__sound-btn" value="thunder"><i class="fa-solid fa-cloud-bolt"></i></button>
                    <button class="focus-lotr__sound-btn" value="rainfall"><i
                            class="fa-solid fa-cloud-showers-heavy"></i></button>
                    <button class="focus-lotr__sound-btn" value="wind"><i class="fa-solid fa-wind"></i></button>
                    <button class="focus-lotr__sound-btn" value="waves"><i class="fa-solid fa-water"></i></button>
                    <button class="focus-lotr__sound-btn" value="library"><i class="fa-solid fa-book"></i></button>

                    <button class="focus-lotr__sound-btn" value="whales"><i class="fa-solid fa-fish-fins"></i></button>
                    <button class="focus-lotr__sound-btn" value="white_noise"><i class="fa-regular fa-square"></i></button>
                    <button class="focus-lotr__sound-btn" value="pink_noise"><i class="fa-solid fa-square"></i></button>

                </div>
            </div>
        </div>
    </div>
  
    @endsection
