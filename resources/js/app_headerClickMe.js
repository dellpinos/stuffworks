import Swal from './app_sweetAlert';

window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#header-icon-container')) {

        // Detectar idioma para cambiar textos
        const currentLang = document.documentElement.lang;

        button();
        infoCookies();

        setTimeout(() => {
            arrowScroll();
        }, 3000);

        // Parche hasta que sea implementado un diseño responsive

        (() => {
            function checkScreenSize() {
                if (window.innerWidth < 1200) { // Ajusta este valor según tus necesidades
                    document.getElementById('warning-responsive-message').style.display = 'block';
                    document.body.style.overflow = 'hidden'; // Evita que la página se desplace
                } else {
                    document.getElementById('warning-responsive-message').style.display = 'none';
                    document.body.style.overflow = 'auto'; // Permite el desplazamiento de nuevo
                }
            }
    
            // Verifica el tamaño de la pantalla al cargar la página
            window.onload = checkScreenSize;
    
            // Verifica el tamaño de la pantalla cada vez que se redimensiona la ventana
            window.onresize = checkScreenSize;

        })();

        // Parche hasta que sea implementado un diseño responsive


        function infoCookies() {

            let flagAlerta = true;
            // Cargar desde localStorage si existe
            const valueLS = localStorage.getItem('info-cookies');
            if (valueLS) {
                flagAlerta = JSON.parse(valueLS);
            }
            // Leer de LS
            if (flagAlerta) {
                sweetAlert('info');
            }
        }

        let txt0;

        if (currentLang === 'es') {
            txt0 = "Este sitio almacena tus prefernecias en tu navegador. No volveré a mostrarte este cartel.";
        } else {
            txt0 = "This site stores your preferences in your browser. I will not show you this message again.";
        }

        function sweetAlert() {

            Swal.fire({
                title: "Info",
                text: txt0,
                showDenyButton: false,
                icon: 'question',
                confirmButtonText: "Ok",
            }).then((result) => {
                if (result.isConfirmed) {
                    localStorage.setItem('info-cookies', false);
                }
            });
        }

        function arrowScroll() {

            const btn = document.querySelector('#scroll-arrow');
            const footer = document.querySelector('FOOTER');
            let flag = false;

            window.addEventListener('scroll', function () {

                const footerPosition = footer.getBoundingClientRect();

                if (!flag) {
                    if (footerPosition.top <= window.innerHeight && footerPosition.bottom >= 0) {
                        btn.classList.add('scroll--oculto');
                        flag = true;
                    } else {
                        btn.classList.remove('scroll--oculto');
                    }
                }
            });
        }

        function button() {
            const iconBtnCont = document.querySelector('#header-icon-container');
            // const displayOpts = document.querySelector('#header-icono-opts');
            // const displayOne = document.querySelector('#header-icon-display-one');
            const displayTwo = document.querySelector('#header-icon-display-two');
            const iconBtn = document.querySelector('#header-icon');

            let firstClick = 0;
            let firstClickObj = '';
            let flag = true; // flag de un solo intento
            let targetNum = 6; // segs
            let tolerance = 0.1; // segs
            let displayCron = 3; // segs
            let help = true;
            let jugando = false;
            let victoriesAcu = 0;

            iconBtnCont.addEventListener('mouseover', () => {
                displayTwo.textContent = "Click Me!";
            });

            iconBtnCont.addEventListener('mouseleave', () => {
                displayTwo.textContent = "";
            });

            function animacionClick() {

                if (jugando) {
                    document.querySelector('#header-icon').classList.remove('fa-gear');
                    document.querySelector('#header-icon').classList.add('fa-crosshairs');

                } else {
                    document.querySelector('#header-icon').classList.remove('fa-crosshairs');
                    document.querySelector('#header-icon').classList.add('fa-gear');
                }
            }

            iconBtnCont.addEventListener('click', () => {

                jugando = true;

                // animación
                animacionClick();

                if (firstClick === 0) {

                    firstClickObj = new Date();
                    firstClick = Math.floor(firstClickObj.getTime() / 1000).toFixed(2);

                    setInterval(() => {
                        const elapsedTime = updateTimer();

                        if (jugando) {
                            iconBtnCont.classList.add('cursor-pointer');

                        } else {
                            iconBtnCont.classList.remove('cursor-pointer');
                            animacionClick()
                        }

                        if (elapsedTime <= targetNum) {
                            displayTwo.textContent = (targetNum - elapsedTime).toFixed(2) + " segs";
                        }

                        if (elapsedTime > displayCron && jugando) {
                            // Ocultar cronometro / agregar transición
                            displayTwo.textContent = '';
                        }

                        // el -0.5 es para que el usuario vea la señal antes // >>>>
                        if (Math.abs((targetNum - elapsedTime) - 0.5) < tolerance) {

                            if (help) {
                                // Cambiar color del icono
                                iconBtn.classList.add('c-green');
                            }

                            setTimeout(() => {

                                // Lose!
                                // Pierde por tiempo

                                if (jugando) {
                                    iconBtn.classList.remove('c-green');
                                    iconBtn.classList.add('c-red');
                                }

                                setTimeout(() => {
                                    if (jugando) {
                                        triggerPulse();
                                        reset();
                                    }
                                }, 500);
                            }, 500);
                        }
                    }, 100);

                } else {

                    jugando = false;
                    animacionClick()

                    const secondClick = new Date();
                    const secondClickInSecs = Math.floor(secondClick.getTime() / 1000).toFixed(2);

                    // Math.abs() ignora el signo del número, de esta forma la tolerancia funciona hacia "arriba" o hacia "abajo"
                    if (Math.abs(targetNum - (secondClickInSecs - firstClick)) <= tolerance) {

                        // Win!
                        triggerPulse(true);
                        success();

                        const mensOpts = document.querySelector('#header-mensaje-opts');
                        const mensTol = document.querySelector('#mens-tolerancia');
                        const mensHelp = document.querySelector('#mens-help');

                        mensTol.value = tolerance;
                        // mensHelp.checked = true;

                        mensTol.addEventListener('change', (e) => {
                            tolerance = e.target.value;
                        });

                        mensHelp.addEventListener('change', (e) => {
                            help = e.target.checked
                        });

                        mensOpts.classList.add('header__mensaje-visible');

                        reset();

                    } else {

                        // Lose
                        triggerPulse(false);
                    }
                }
            });

            function updateTimer() {

                let elapsedTime = new Date();
                elapsedTime = elapsedTime - firstClickObj;
                return parseFloat((elapsedTime / 1000).toFixed(2)); // formateado como segundos con dos decimales: 1.04 segs
            }

            function reset() {
                firstClick = 0;
                firstClickObj = '';
                flag = true;
                iconBtn.classList.remove('c-green');
                iconBtn.classList.remove('c-red');
                jugando = false;
                animacionClick()
                displayTwo.textContent = '';
            }

            function success() {

                // Actualizar contador
                const victories = document.querySelector('#mens-victories');
                victoriesAcu++;
                victories.textContent = victoriesAcu;

                // Nuevo número random entre 3 y 15
                targetNum = getRandomInt(3, 15);

                if (localStorage.getItem('RECORD')) {
                    let record = localStorage.getItem('RECORD');

                    const mensRecord = document.querySelector('#mens-record');
                    mensRecord.textContent = record;

                    if (victoriesAcu > record) {
                        // Nuevo record
                        record = victoriesAcu
                        mensRecord.textContent = record;
                        localStorage.setItem('RECORD', record);

                    }
                } else {
                    localStorage.setItem('RECORD', victoriesAcu);
                }
            }

            function getRandomInt(min, max) {
                //  min y max son enteros
                min = Math.ceil(min);
                max = Math.floor(max);
                // Retorna un número entero aleatorio entre min (incluido) y max (incluido)
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            function triggerPulse(victory) {

                if (victory) {
                    iconBtnCont.classList.remove('header__icono-pulse-fail');
                    iconBtnCont.classList.add('header__icono-pulse-success');

                    setTimeout(() => {
                        iconBtnCont.classList.remove('header__icono-pulse-success'); // Reset the animation
                    }, 1000);

                    iconBtn.classList.remove('c-red');
                    iconBtn.classList.add('c-green');

                    setTimeout(() => {
                        reset();
                    }, 500);

                } else {

                    iconBtnCont.classList.remove('header__icono-pulse-success');
                    iconBtnCont.classList.add('header__icono-pulse-fail');

                    setTimeout(() => {
                        iconBtnCont.classList.remove('header__icono-pulse-fail'); // Reset the animation
                    }, 1000);

                    iconBtn.classList.remove('c-green');
                    iconBtn.classList.add('c-red');

                    setTimeout(() => {
                        reset();
                    }, 500);
                }
            }
        }
    }
});