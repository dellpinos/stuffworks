@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - Grid
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">Grid</h2>
        <form class="formulario">
            <p class="formulario__description">{{ __('scripts.script_grid_desc') }}</p>
            <div class="formulario__example">
                <p>Input: "4" - "6"</p>
                <p>Output: Grid</p>
            </div>
            <div class="formulario__campos">
                <input type="number" min="1" max="10" placeholder="Height" id="inputCuadriculaAlto">
                <input type="number" min="1" max="10" placeholder="Width" id="inputCuadriculaAncho">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioCuadricula">{{ __('scripts.script_btn_submit') }}</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoCuadricula">{{ __('scripts.script_result') }}</p>
        </div>
    </div>
@endsection
