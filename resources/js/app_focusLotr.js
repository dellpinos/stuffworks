
window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#focus-lotr-hora')) {
        main();
        crono();

    }



    // function randomWiki() {

    //     fetch('https://en.wikipedia.org/w/api.php?action=query&list=random&rnlimit=1&format=json&origin=*')
    //         .then(response => response.json())
    //         .then(data => {
    //             const page = data.query.random[0];
    //             const pageTitle = page.title;
    //             const pageId = page.id;
    //             const pageUrl = `https://en.wikipedia.org/?curid=${pageId}`;

    //             console.log(`Title: ${pageTitle}`);
    //             console.log(`URL: ${pageUrl}`);

    //             const article = document.querySelector('#focus-lotr-article');
    //             article.href = pageUrl;
    //             article.textContent = pageTitle;
    //         })
    //         .catch(error => console.error('Error:', error));

    // }

    function crono() {

        const hs = document.querySelector('#focus-ring-crono-hs');
        const mins = document.querySelector('#focus-ring-crono-mins');
        const btn = document.querySelector('#focus-ring-crono-btn');
        const pauseBtn = document.querySelector('#focus-ring-crono-pause');
        const resetBtn = document.querySelector('#focus-ring-crono-reset');
        let flagActivo = false; // flag "activo"
        let flagPause = false;  // flag "pause"
        let intervalId; // me permite reiniciar el interval

        let hsCrono = 0;
        let minsCrono = 0;
        let total = 0;

        const regexMins = /^(?:[1-5]?[0-9]|60)$/; // 0-60 números positivos
        const regexHs = /^(?:[0]?[0-7]|7)$/; // 0-7 números positivos

        hs.addEventListener('input', (e) => {

            if (!flagActivo) {

                let tempHs = 0;
                if (regexHs.test(e.target.value)) {
                    tempHs = e.target.value;
                    e.target.value = tempHs;
                } else {
                    e.target.value = tempHs;
                }
            }
        });

        mins.addEventListener('input', (e) => {

            if (!flagActivo) {
                let tempMins = 0;
                if (regexMins.test(e.target.value)) {
                    tempMins = e.target.value;
                    e.target.value = tempMins;
                } else {
                    e.target.value = tempMins;
                }
            }
        });


        btn.addEventListener('click', (e) => {
            e.preventDefault();
            if (hs.value !== '' || mins.value !== '') {

                mins.disabled = true;
                hs.disabled = true;

                flagActivo = true;
                hideBtns();

                hsCrono = +hs.value;
                minsCrono = +mins.value;
                total = (hsCrono * 60) + minsCrono;

                intervalId = setInterval(() => {
                    if (total !== 0 & !flagPause & flagActivo) {
                        total = total - 1;

                        if (total > 0) {
                            const tempHs = Math.floor(total / 60);
                            const tempMins = total - (tempHs * 60);

                            hs.value = tempHs;
                            mins.value = tempMins;
                        } else {
                            resetCrono();
                        }
                    }
                }, 1000); // 1 min 6000
            }
        });

        pauseBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (flagActivo) {
                if (!flagPause) {
                    // no esta en pausa
                    flagPause = true; // pausar
                    pauseBtn.innerHTML = '<i class="fa-regular fa-circle-play"></i>'

                } else {
                    // esta en pausa
                    flagPause = false; // despausar
                    pauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>'
                }

            }
        });

        resetBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (flagActivo) {
                resetCrono();
            }
        });

        function resetCrono() {
            hs.value = '';
            mins.value = '';
            flagActivo = false;
            mins.disabled = false;
            hs.disabled = false;
            flagPause = false;
            hsCrono = 0;
            minsCrono = 0;
            total = 0;
            pauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>'
            if(intervalId) clearInterval(intervalId);
            hideBtns();
        }

        function hideBtns() {

            // Cambia la visibilidad de los botones
            const contBtns = document.querySelector('#focus-ring-crono-btns');
            const playBtn = document.querySelector('#focus-ring-crono-btn');
            if (flagActivo) {
                contBtns.classList.remove('focus-lotr__btns');
                playBtn.classList.add('focus-lotr__btn-op');
            } else {
                contBtns.classList.add('focus-lotr__btns');
                playBtn.classList.remove('focus-lotr__btn-op');
            }
        }
    }
    function main() {


        const elementoHora = document.querySelector('#focus-lotr-hora');
        const elementoFecha = document.querySelector('#focus-lotr-fecha');
        const elementoUnix = document.querySelector('#focus-unix');
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

            elementoHora.innerText = `${hs}:${min}hs`;
            // elementoHora.innerText = `${hs}:${min}:${sec}`;

            const opts = {
                weekday: "long",
                year: "numeric",
                month: "long",
                day: "numeric",
            };
            elementoFecha.innerText = fechaActual.toLocaleDateString('es-ES', opts);

        };

        calcularFecha();

        setInterval(() => {

            calcularFecha();

        }, 30000);

    }


});