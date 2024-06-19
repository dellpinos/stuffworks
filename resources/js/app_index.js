
window.addEventListener('DOMContentLoaded', () => {



    

    if (document.querySelector('#inicio-hora')) {
        main();
    }

    function main() {


        const elementoHora = document.querySelector('#inicio-hora');
        const elementoFecha = document.querySelector('#inicio-fecha');
        const elementoUnix = document.querySelector('#inicio-unix');
        // const elementoDiasNacimiento = document.querySelector('#inicio-dias-nacimiento');
        // const elementoYearsNacimiento = document.querySelector('#inicio-years-nacimiento');

        const calcularFecha = () => {

            const fechaActual = new Date();

            const hs = fechaActual.getHours().toString().padStart(2, '0');
            const min = fechaActual.getMinutes().toString().padStart(2, '0');
            const sec = fechaActual.getSeconds().toString().padStart(2, '0');

            const fechaActualEnSegundos = Math.floor(fechaActual.getTime() / 1000);

            // const fechaNacimiento = new Date('1987-11-16');

            // const diferenciaNacimiento = Math.floor((fechaActual - fechaNacimiento) / (1000 * 60 * 60 * 24));

            // elementoDiasNacimiento.textContent = diferenciaNacimiento;
            // elementoYearsNacimiento.textContent = Number((diferenciaNacimiento / 365).toFixed(2));

            elementoHora.innerText = `< ${hs}:${min}:${sec} />`;

            elementoFecha.innerText = fechaActual.toLocaleDateString('es-ES');
            elementoUnix.innerText = 'Unix: ' + fechaActualEnSegundos;

        };

        calcularFecha();

        setInterval(() => {

            calcularFecha();

        }, 1000);

    }


});