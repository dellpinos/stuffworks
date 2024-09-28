@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - camelCase
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">camelCase</h2>
        <form class="formulario" id="formularioToCamel">
            <p class="formulario__description">{{ __('scripts.script_cc_desc') }}</p>
            <div class="formulario__example">
                <p>Input: "This IS-AN examPLE of TExt"</p>
                <p>Output: "thisIsAnExampleOfText"</p>
            </div>
            <div>
                <input type="text" placeholder="{{ __('scripts.script_placeholder') }}" id="inputToCamel">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioToCamel">{{ __('scripts.script_btn_submit') }}</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoToCamel">{{ __('scripts.script_result') }}</p>
        </div>
    </div>
@endsection
