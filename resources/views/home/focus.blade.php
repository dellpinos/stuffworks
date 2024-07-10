@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Focus Mode
@endsection

@section('main-content')
    <div class="focus__contenedor">
        <div class="focus__contenedor-heading">
            <p class="focus__mens">Haz de este momento tu mejor trabajo. Si tienes la mente en blanco, presiona el botón <i class="focus__icono fa-solid fa-gear" id="header-icon"></i>.</p>
            <h1 id="focus-hora">&lt/ Ideas? ></h1>

            <div class="focus__contenedor-fechas">
                <p id="focus-unix"></p>
                <p id="focus-fecha"></p>

            </div>
            <p class="focus__quote"><span>{{ $quote['author'] }}, say:</span> {{ $quote['content'] }}</p>

        </div>
    </div>
@endsection
