@extends('layouts.layout')

@section('meta')
@endsection

@section('titulo')
    Mdp
@endsection

@section('contenido')

<div class="inicio__contenedor">
    <div class="inicio__contenedor-heading">
        <h1 id="inicio-hora">&lt/ Ideas? ></h1>

        <div class="inicio__contenedor-fechas">
            <p id="inicio-unix"></p>
            <p id="inicio-fecha"></p>

        </div>
        <p class="inicio__nacimiento">Desde 16/11/87 han pasado <span id="inicio-dias-nacimiento"></span> dias, esto son <span id="inicio-years-nacimiento"></span> años.</p>

    </div>
</div>


@endsection