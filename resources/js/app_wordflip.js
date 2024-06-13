window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#botonFormularioWordFlip')) {
        wordFlip();
    }



    function wordFlip() {
        const botonFormulario = document.querySelector('#botonFormularioWordFlip');
        const formulario = document.querySelector('.formularioWF');
        const texto = document.querySelector('#inputWordFlip');
        const resultado = document.querySelector('#resultadoWF');

        botonFormulario.addEventListener('click', function () {
            const stringIngresado = texto.value;
            invertirPalabra(stringIngresado);
        });

        formulario.addEventListener('submit', function (e) {
            e.preventDefault();
            const stringIngresado = texto.value;
            invertirPalabra(stringIngresado);
        });

        function invertirPalabra(string) {

            //        console.log(string);
            let string2 = string.replace(/[-_,\.]/g, "");

            let array = string2.split(' '); //separa por palabras
            let acu = 0;
            while (acu < array.length) {
                let randomNumber = Math.floor(Math.random() * 100); //random number
                if (randomNumber % 2 === 0) { // palabra elegida
                    //                console.log(array[acu]);
                    let arrayDos = array[acu].split('');  // contiene cada letra de la palabra
                    let acu2 = 0;
                    let valorUno = [];

                    while (acu2 <= arrayDos.length) {
                        valorUno[acu2] = arrayDos[arrayDos.length - acu2];
                        acu2++;
                    }
                    array[acu] = valorUno.join('');
                }
                acu++;

            }
            //        console.log(array.join(' '));

            resultado.textContent = array.join(' ');
        }
    }


});