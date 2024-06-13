

window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#botonFormularioHashtag')) {
        main();
    }



    const hashtag = (str) => {

        const regex = /\s/g;

        if (!str.replace(regex, '').length > 0) {
            console.log('vacio');
            return false;
        }

        let palabras = str.split(' ');
        palabras = palabras.map(element => {
            if (!element.length < 1) {
                element = element.split('');
                element[0] = element[0].toUpperCase();
                return element.join('');
            }
        });

        let string = palabras.join('');

        string = string.replace(regex, '');
        string = string.split('');
        string[0] = string[0].toUpperCase();
        string = '#' + string.join('');

        if (string.length > 140) {
            console.log('Demasiado Largo');
            return false;
        } else {

            return string;
        }
    }


    function main() {
        const botonFormulario = document.querySelector('#botonFormularioHashtag');

        const texto = document.querySelector('#inputHashtag');
        const resultado = document.querySelector('#resultadoHashtag');

        botonFormulario.addEventListener('click', function () {

            const stringIngresado = texto.value;
            const respuesta = hashtag(stringIngresado);

            resultado.textContent = respuesta;
        });
    }
});