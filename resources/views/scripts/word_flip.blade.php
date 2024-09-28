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
            <p class="formulario__description">{{ __('scripts.script_wf_desc') }}</p>
            <div class="formulario__example">
                <p>Input: "This is an example of text"</p>
                <p>Output: "sihT si na example of text"</p>
            </div>
            <div>
                <input type="text" placeholder="{{ __('scripts.script_placeholder') }}" id="inputWordFlip">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioWordFlip">{{ __('scripts.script_btn_submit') }}</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoWF">{{ __('scripts.script_result') }}</p>
        </div>
    </div>
@endsection