@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - #Hashtag
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">#Hashtag</h2>
        <form class="formulario">
            <p class="formulario__description">Convierte frases en hashtags, el resultado no puede superar los 140 caracteres</p>
            <div class="formulario__example">
                <p>Input: "tenemos Un Problema"</p>
                <p>Output: "#TenemosUnProblema"</p>
            </div>
            <div>
                <input type="text" placeholder="Escribe cualquier texto" id="inputHashtag">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioHashtag">Enviar</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoHashtag">Resultado</p>
        </div>
    </div>
@endsection
