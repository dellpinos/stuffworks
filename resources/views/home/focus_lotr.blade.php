@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Focus Mode
@endsection

@section('main-content')
    <div class="focus-lotr__contenedor">

        <img class="focus-lotr__ring" src="{{ asset('img/ring.svg') }}" alt="Anillo unico">


        <div class="focus-lotr__up">


            <div class="focus-lotr__up-tasks">
                {{-- Elemento Visible --}}
                <h4>Notas:</h4>
                <form action="#">
                    <input type="text" name="" id="" placeholder=">_" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                    <input type="text" name="" id="" placeholder=">" value=">_">
                </form>
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
                            <button id="focus-ring-crono-pause" ><i class="fa-solid fa-pause"></i></button>
                            <button id="focus-ring-crono-reset" ><i class="fa-solid fa-rotate"></i></button>
                        </div>
                        <div>
                            <input type="text" placeholder="00" id="focus-ring-crono-hs">
                            <p>:</p>
                            <input type="text" placeholder="00" id="focus-ring-crono-mins">
                        </div>
                        <button id="focus-ring-crono-btn"><i class="fa-regular fa-circle-play"></i></button>
                    </form>
                </div>
            </div>


            {{-- Elemento Visible --}}
            {{-- <a class="focus-lotr__up-article" href="" id="focus-lotr-article" target="_blank">
            </a> --}}

            {{-- <iframe src="http://www.staggeringbeauty.com/" class="focus-lotr__beauty" style="height: 100%; width: 100%;"></iframe> --}}

            <div class="focus-lotr__links">

                {{-- Elemento Visible --}}
                <div class="focus-lotr__links-grid">
                    <a href="https://trello.com/" target="_blank"><i class="fa-brands fa-trello"></i></a>
                    <a href="https://es.lipsum.com/" target="_blank"><i class="fa-solid fa-align-left"></i></a>
                    <a href="https://fonts.google.com/" target="_blank"><i class="fa-solid fa-font"></i></a>
                    <a href="https://www.svgrepo.com/" target="_blank"><i
                            class="fa-solid fa-triangle-exclamation"></i></a>
                    <a href="https://fontawesome.com/search" target="_blank"><i class="fa-solid fa-icons"></i></a>
                    <a href="https://resizeimage.net/" target="_blank"><i class="fa-solid fa-image"></i></a>
                    <a href="https://randomcolour.com/" target="_blank"><i class="fa-solid fa-droplet"></i></a>
                    <a href="https://paletadecolores.online/" target="_blank"><i
                            class="fa-solid fa-paint-roller"></i></a>
                    <a href="https://color.adobe.com/es/create/color-wheel" target="_blank"><i
                            class="fa-solid fa-palette"></i></a>
                </div>
            </div>


        </div>





        {{-- <div class="focus_lotr__contenedor-heading">
            <p class="focus_lotr__mens">Haz de este momento tu mejor trabajo. Si tienes la mente en blanco, presiona el botón <i class="focus_lotr__icono fa-solid fa-radiation" id="header-icon"></i>.</p>
            <h1 id="focus-hora">&lt/ Ideas? ></h1>

            <div class="focus_lotr__contenedor-fechas">
                <p id="focus-unix"></p>
                <p id="focus-fecha"></p>

            </div>
            <p class="focus_lotr__nacimiento"><span></span></p>

        </div> --}}
    </div>
@endsection
