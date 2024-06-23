@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Focus Mode
@endsection

@section('main-content')
    <div class="focus-lotr__contenedor">

        <img class="focus-lotr__ring" src="{{ asset('img/ring.svg')}}" alt="Anillo unico">







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
