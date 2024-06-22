
window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#botonFormularioHexa')) {
        hexa();
    }

    function hexa() {
        const botonFormulario = document.querySelector('#botonFormularioHexa');

        const texto = document.querySelector('#inputHexa');
        const resultado = document.querySelector('#resultadoHexa');

        botonFormulario.addEventListener('click', function (e) {

            e.preventDefault();

            const stringIngresado = texto.value.split(',');
            const respuesta = rgb(stringIngresado[0], stringIngresado[1], stringIngresado[2]);

            resultado.textContent = respuesta;
        });
    }

    function rgb(r, g, b) {

        let numero = parseInt(r);
        let numero2 = parseInt(g);
        let numero3 = parseInt(b);

        if (numero == 0 || numero < 0) {
            numero = '00';
        } else if (numero > 255) {
            numero = 'ff';
        } else {

            numero = numero.toString(16);
            if (numero.length == 1) {
                numero = '0' + numero;
            }
        }
        if (numero2 == 0 || numero2 < 0) {
            numero2 = '00';
        } else if (numero2 > 255) {
            numero2 = 'ff';
        } else {
            numero2 = numero2.toString(16);
            if (numero2.length == 1) {
                numero2 = '0' + numero2;
            }
        }

        if (numero3 == 0 || numero3 < 0) {
            numero3 = '00';
        } else if (numero3 > 255) {
            numero3 = 'ff';
        } else {
            numero3 = numero3.toString(16);
            if (numero3.length == 1) {
                numero3 = '0' + numero3;
            }
        }

        let resultado = '#' + numero + numero2 + numero3;
        return resultado.toUpperCase()
    }

});