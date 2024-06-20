@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
@endsection

@section('main-content')

<div class="contenido wordFlip">
    <h2>Hexa</h2>
    <div class="formularioWF">

        <fieldset>
            <legend>Convierto colores RGB en Hexadecimal. Los números deben estar separados por una coma. <br><br>
                Ejemplo: <br>
                Input: "255,10,111<br> 
                Output: "FF0A6F"</legend>
            <div>
                <input type="text" placeholder="Color RGB" id="inputHexa">
            </div>
            <div class="boton">
                <p style="cursor: pointer;" type="submit" id="botonFormularioHexa">Enviar</p>
            </div>
            <div class="contenedorResultado">
                <p id="resultadoHexa"></p>
            </div>
        </fieldset>
    </div>
</div>



@endsection