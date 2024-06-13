@extends('layouts.layout')

@section('meta')
@endsection

@section('titulo')
@endsection

@section('contenido')

<div class="contenido wordFlip">
    <h2>Cuadricula</h2>
    <div class="formularioWF">

        <fieldset>
            <legend>Genero una cuadricula</legend>

            <div style="display: flex; gap: 3rem;">
                <div style="width: 100%;">
                    <label>Altura</label>
                    <input type="text" placeholder="Alto" id="inputAlto">

                </div>
                <div style="width: 100%;">
                    <label for="">Ancho</label>
                    <input type="text" placeholder="Ancho" id="inputAncho">
                </div>
            </div>

            <div class="boton">
                <p style="cursor: pointer;" type="submit" id="botonFormularioCuadricula">Enviar</p>
            </div>
            <div class="resultado_cuadricula" style="font-size:40px!important;">
                Ingresa dos números
            </div>
        </fieldset>
    </div>
</div>


@endsection