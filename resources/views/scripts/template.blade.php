@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - # # # # # # #
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading"># # # # # # #</h2>
        <form class="formulario">
            <p class="formulario__description"># # # # Descripción # # # #</p>
            <div class="formulario__example">
                <p>Input: # # # # Descripción # # # #</p>
                <p>Output: # # # # Descripción # # # #</p>
            </div>
            <div>
                <input type="" placeholder="Escribe cualquier texto" id="">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="">Enviar</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="">Resultado</p>
        </div>
    </div>
@endsection
