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
            <p class="formulario__description">{{ __('scripts.script_likes_desc') }}</p>
            <div class="formulario__example">
                <p>Input: "Alex, Jacob, Mark, Max"</p>
                <p>Output: "Alex, Jacob and 2 others like this"</p>
            </div>
            <div>
                <input type="" placeholder="Write a list of names" id="inputLikes">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioLikes">{{ __('scripts.script_btn_submit') }}</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoLikes">{{ __('scripts.script_result') }}</p>
        </div>
    </div>
@endsection