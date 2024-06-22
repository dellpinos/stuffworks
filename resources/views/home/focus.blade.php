@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Focus Mode
@endsection

@section('main-content')
    <div class="focus__contenedor">
        <div class="focus__contenedor-heading">
            <p class="focus__mens">Haz de este momento tu mejor trabajo. Si tienes la mente en blanco, presiona el botón <i class="focus__icono fa-solid fa-radiation" id="header-icon"></i>.</p>
            <h1 id="focus-hora">&lt/ Ideas? ></h1>
            {{-- <div class="focus__hora-contenedor">
                <p>&lt/</p>
                <h2 id="focus-hora"></h2>
                <p>></p>
            </div> --}}

            <div class="focus__contenedor-fechas">
                <p id="focus-unix"></p>
                <p id="focus-fecha"></p>

            </div>
            <p class="focus__nacimiento"><span>{{ $quote['author'] }}, say:</span> {{ $quote['content'] }}</p>

        </div>
    </div>
@endsection
