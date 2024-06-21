@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - WordFlip!
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">WordFlip!</h2>
        <form class="formulario">
            <p class="formulario__description">Invierte el orden de las letras en la palabra, estas palabras se eligen al azar.</p>
            <div class="formulario__example">
                <p>Input: "Este es un ejemplo de texto"</p>
                <p>Output: "etsE es un olpmeje de otxet"</p>
            </div>
            <div>
                <input type="text" placeholder="Escribe cualquier texto" id="inputWordFlip">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioWordFlip">Enviar</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoWF">Resultado</p>
        </div>
    </div>
@endsection