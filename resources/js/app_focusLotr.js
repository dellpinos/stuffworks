import Swal from './app_sweetAlert';

window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#focus-lotr-hora')) {
        actualDate();
        crono();
        tasks();
    }

    function tasks() {

        const taskCont = document.querySelector('#focus-lotr-tasks');

        for (let i = 0; i < 25; i++) {

            const input = document.createElement('INPUT');
            input.type = 'text';
            input.placeholder = '>_';
            input.id = `focus-ring-input-${i}`;
            input.value = `${input.value}`;

            // Cargar desde localStorage si existe
            const valueLS = localStorage.getItem(`focus-ring-input-${i}`);
            if (valueLS) {
                input.value = valueLS;
            }
            // Almacenar en LS
            input.addEventListener('input', (e) => {
                localStorage.setItem(e.target.id, e.target.value);
            });

            taskCont.appendChild(input);
        }
    }

    function crono() {

        // Cronómetro
        const hs = document.querySelector('#focus-ring-crono-hs');
        const mins = document.querySelector('#focus-ring-crono-mins');

        // Btns Cronometro
        const pauseBtn = document.querySelector('#focus-ring-crono-pause');
        const resetBtn = document.querySelector('#focus-ring-crono-reset');
        const muteBtn = document.querySelector('#focus-ring-crono-sound');
        const playBtn = document.querySelector('#focus-ring-crono-btn');

        // Btns de Sonido
        const soundBtns = document.querySelector('.focus-lotr__sounds-grid').querySelectorAll('BUTTON');

        // Inicializar Sonido
        let actualSound = 'wind'; // < almacenar y cargar de LS
        let soundInstance = new Audio();

        // Instancia Interval
        let intervalId; // me permite reiniciar el interval

        // Flags
        let flagActivo = false; // cronometro "activo"
        let flagPause = false;  // cronometro pausado
        let flagMute = true; // Es reemplazado por LS

        // Tiempo del cronometro
        let hsCrono = 0;
        let minsCrono = 0;
        let total = 0;

        // Crono Regex
        const regexMins = /^(?:[1-5]?[0-9]|60)$/; // 0-60 números positivos
        const regexHs = /^(?:[0]?[0-7]|7)$/; // 0-7 números positivos

        cargarDatosLocalStorage();

        resetCrono(); // reinicia todo el cronometro cada vez que se recarga la pag
        playBtn.classList.add('focus-lotr__btn-op')

        hs.addEventListener('input', (e) => {

            if (!flagActivo) {

                let value = e.target.value;

                // Filtrar caracteres no permitidos
                if (regexHs.test(value)) {
                    // El valor es válido según la regex
                    e.target.value = value;
                } else {
                    // El valor no es válido, eliminar el último carácter ingresado
                    e.target.value = value.slice(0, -1);
                }

                if (value !== '') {
                    playBtn.classList.remove('focus-lotr__btn-op');
                } else {
                    playBtn.classList.add('focus-lotr__btn-op');
                }
            }
        });

        mins.addEventListener('input', (e) => {

            if (!flagActivo) {
                let value = e.target.value;

                // Filtrar caracteres no permitidos
                if (regexMins.test(value)) {
                    // El valor es válido según la regex
                    e.target.value = value;
                } else {
                    // El valor no es válido, eliminar el último carácter ingresado
                    e.target.value = value.slice(0, -1);
                }

                if (value !== '') {
                    playBtn.classList.remove('focus-lotr__btn-op');
                } else {
                    playBtn.classList.add('focus-lotr__btn-op');
                }
            }
        });

        playBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if ((hs.value !== '' || mins.value !== '') & !flagActivo) {

                // Evaluar sonido
                if (!flagMute) { // Flag de mute
                    soundInstance = playSound(actualSound);
                    soundInstance.play();
                }

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
                            playBtn.classList.add('focus-lotr__btn-op');
                            // Termina el cronometro, animación aqui!
                            sweetAlert();
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
                    flagPause = true;
                    pauseBtn.innerHTML = '<i class="fa-regular fa-circle-play"></i>';
                    soundInstance.pause(); // pausar audio
                } else {
                    // esta en pausa
                    flagPause = false;
                    pauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>';
                    soundInstance.play();
                }
            }
        });

        resetBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (flagActivo) {
                resetCrono();
            }
        });

        muteBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (flagActivo) {
                if (flagMute) {
                    flagMute = false;
                    muteBtn.innerHTML = '<i class="fa-solid fa-volume-high"></i>';
                    soundInstance = playSound(actualSound);
                    soundInstance.play();
                    localStorage.setItem('flag-mute', false);
                } else {
                    flagMute = true;
                    muteBtn.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>';
                    soundInstance.pause();
                    soundInstance = new Audio();
                    localStorage.setItem('flag-mute', true);
                }
            }
        })

        soundBtns.forEach((btn) => {
            btn.addEventListener('click', (e) => {

                actualSound = btn.value;
                localStorage.setItem('sound-track', btn.value);

                soundBtns.forEach((btnActivo) => {
                    // Limpiar estilo seleccionado cada vez que hay un click
                    btnActivo.classList.remove('focus-lotr__sound-btn--activo');
                });
                
                // Cambiar estilo a seleccionado
                btn.classList.add('focus-lotr__sound-btn--activo');
                // LS


                if (flagActivo) {
                    soundInstance.pause();
                    soundInstance = playSound(actualSound);

                    if(!flagPause & !flagMute) {
                        soundInstance.play();
                    }
                }
            });
        });

        function cargarDatosLocalStorage() {
            /* Cargar datos de  LocalStorage */

            // Cargar mute
            const muteLS = localStorage.getItem('flag-mute');
            if (muteLS) {
                flagMute = JSON.parse(muteLS);

                if (!flagMute) {
                    muteBtn.innerHTML = '<i class="fa-solid fa-volume-high"></i>';
                } else {
                    muteBtn.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>';
                }
            }

            // Cargar track
            const soundLS = localStorage.getItem('sound-track');
            if (soundLS) {
                actualSound = soundLS;
                soundBtns.forEach((btnActivo) => {
                    // Limpiar estilo seleccionado cada vez que hay un click
                    if( btnActivo.value === soundLS) {
                        
                        btnActivo.classList.add('focus-lotr__sound-btn--activo');
                    }
                });
            } else {

                soundBtns.forEach((btnActivo) => {
                    // Limpiar estilo seleccionado cada vez que hay un click
                    if( btnActivo.value === actualSound) {
                        
                        btnActivo.classList.add('focus-lotr__sound-btn--activo');
                    }
                });

            }
            // Cambiar estilos del track

        }

        function sweetAlert() {

            Swal.fire({
                title: 'Tiempo cumplido!',
                text: 'Deberias descansar un poco, podés seguir en otro momento.',
                icon: 'success',
                confirmButtonText: 'Thanks!',
            })
        }

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
            soundInstance.pause(); // pausar sonido
            pauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>'
            if (intervalId) clearInterval(intervalId);
            hideBtns();
            playBtn.classList.add('focus-lotr__btn-op');
        }

        function hideBtns() {

            // Cambia la visibilidad de los botones
            const contBtns = document.querySelector('#focus-ring-crono-btns');

            // Mostrar opts y ocultar play
            if (flagActivo) {
                contBtns.classList.remove('focus-lotr__btns');
                playBtn.classList.add('focus-lotr__btn-op');
            } else {
                contBtns.classList.add('focus-lotr__btns');
                playBtn.classList.remove('focus-lotr__btn-op');
            }
        }

        function playSound(sound) {

            // Los nombres de los mp3 son tomados del "value" de cada BUTTON
            const localSoundInstance = new Audio(`audio/${sound}.mp3`);

            // Parche para sonidos demasiado altos (baja el volumen para reproducirlo)
            if(sound === 'white_noise') { // El mismo nombre que el archivo y el value del boton
                localSoundInstance.volume = .4;
            }

            // activar el loop
            localSoundInstance.loop = true;

            // pausar pista actual
            localSoundInstance.pause();

            // reiniciar pista
            localSoundInstance.currentTime = 0;

            return localSoundInstance;
        }
    }
    function actualDate() {


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