@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - Likes
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">Likes</h2>
        <form class="formulario">
            <p class="formulario__description">Pone "likes" a un grupo de nombres</p>
            <div class="formulario__example">
                <p>Input: "Alex, Jacob, Mark, Max"</p>
                <p>Output: "Alex, Jacob and 2 others like this"</p>
            </div>
            <div>
                <input type="" placeholder="Escribe un listado de nombres" id="inputLikes">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioLikes">Enviar</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoLikes">Resultado</p>
        </div>
    </div>
@endsection