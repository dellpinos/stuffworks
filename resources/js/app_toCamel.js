window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#botonFormularioToCamel')) {
        toCamel();
    }

    function toCamel() {
        const botonFormulario = document.querySelector('#botonFormularioToCamel');
        const formulario = document.querySelector('#formularioToCamel');
        const texto = document.querySelector('#inputToCamel');
        const resultado = document.querySelector('#resultadoToCamel');

        botonFormulario.addEventListener('click', function () {
            const stringIngresado = texto.value;
            camelCase(stringIngresado);
        });

        formulario.addEventListener('submit', function (e) {
            e.preventDefault();
            const stringIngresado = texto.value;
            camelCase(stringIngresado);
        });
        function camelCase(str) {
            let letraMin;
            if (str.match(/Marina/g) || str.match(/marina/g)) {
                const patronMarina = /[\ba-zA-Z\b]{4,6}/g;
                letraMin = str.replace(patronMarina, 'Marina' + " ")
            } else {
                const patron = /[-_\s](.)/g;
                const patron2 = /[A-Z]/g;

                let strMin = str.replace(patron2, function (match) {
                    return match.toLowerCase();
                })

                letraMin = strMin.replace(patron, function (match) {
                    return match[1].toUpperCase();
                });
            }

            resultado.textContent = letraMin;
        }
    }
});