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
            <p class="formulario__description">{{ __('scripts.script_hash_desc') }}</p>
            <div class="formulario__example">
                <p>Input: "we Have a problem"</p>
                <p>Output: "#WeHaveAProblem"</p>
            </div>
            <div>
                <input type="text" placeholder="{{ __('scripts.script_placeholder') }}" id="inputHashtag">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioHashtag">{{ __('scripts.script_btn_submit') }}</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoHashtag">{{ __('scripts.script_result') }}</p>
        </div>
    </div>
@endsection
