@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - Hexa
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">Hexa</h2>
        <form class="formulario">
            <p class="formulario__description">{{ __('scripts.script_hexa_desc') }}</p>
            <div class="formulario__example">
                <p>Input: "255,10,111"</p>
                <p>Output: "FF0A6F"</p>
            </div>
            <div>
                <input type="" placeholder="RGB color" id="inputHexa">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioHexa">{{ __('scripts.script_btn_submit') }}</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoHexa">{{ __('scripts.script_result') }}</p>
        </div>
    </div>
@endsection
