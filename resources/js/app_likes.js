window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#botonFormularioLikes')) {
        main();
    }

    function main() {

        const botonFormulario = document.querySelector('#botonFormularioLikes');
        const input = document.querySelector('#inputLikes');
        const resultado = document.querySelector('#resultadoLikes');

        botonFormulario.addEventListener('click', function (e) {
            e.preventDefault();

            const nameArray = input.value.split(',');
            const name = stringName(nameArray);

            function stringName(array) {
                if (!array.length <= 0) {
                    if (array.length === 1) {
                        return array[0] + " likes this";
                    } else if (array.length === 2) {
                        return array[0] + " and " + array[1] + " like this";
                    } else if (array.length === 3) {

                        return array[0] + ", " + array[1] + " and " + array[2] + " like this";
                    } else {
                        return array[0] + ", " + array[1] + " and " + (array.length - 2) + " others like this";
                    }
                } else {
                    return "no one likes this";
                }
            }

            resultado.textContent = name;

        });
    }
})