
window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#botonFormularioCuadricula')) {
        main();
    }

    const cuadricula = (h, w, resultado) => {

        for (let x = 0; x < h; x++) {

            let linea = '';

            if (x % 2 !== 0) {
                for (let i = 0; i < w; i++) {
                    if (i % 2 === 0) {
                        linea = linea + '#';
                    } else {
                        linea = linea + '@';
                    }
                }

            } else {

                for (let i = 0; i < w; i++) {
                    if (i % 2 !== 0) {
                        linea = linea + '#';
                    } else {
                        linea = linea + '@';
                    }
                }
            }

            const lineaResultado = document.createElement('P');
            lineaResultado.textContent = linea;

            resultado.appendChild(lineaResultado);
        }
    }

    function main() {

        const botonFormulario = document.querySelector('#botonFormularioCuadricula');

        const mensError = document.querySelector('#mensajeError');
        const alto = document.querySelector('#inputAlto');
        const ancho = document.querySelector('#inputAncho');
        const resultado = document.querySelector('.resultado_cuadricula');

        botonFormulario.addEventListener('click', function () {

            if (alto.value > 500 || ancho.value > 100) {

                resultado.textContent = 'El máximo es 500 de alto y 100 de ancho';

            } else {

                resultado.textContent = '';
                cuadricula(alto.value, ancho.value, resultado);
            }
        });
    }
});