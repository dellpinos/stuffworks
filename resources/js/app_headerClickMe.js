
window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#header-icon-container')) {

        const iconBtnCont = document.querySelector('#header-icon-container');
        // const displayOpts = document.querySelector('#header-icono-opts');
        // const displayOne = document.querySelector('#header-icon-display-one');
        const displayTwo = document.querySelector('#header-icon-display-two');
        const iconBtn = document.querySelector('#header-icon');

        let firstClick = 0;
        let firstClickObj = '';
        // let flag = true; // flag de un solo intento
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

        iconBtnCont.addEventListener('click', () => {

            jugando = true;

            if (firstClick === 0) {

                firstClickObj = new Date();
                firstClick = Math.floor(firstClickObj.getTime() / 1000).toFixed(2);

                setInterval(() => {
                    const elapsedTime = updateTimer();

                    if (elapsedTime <= targetNum) {
                        displayTwo.textContent = (targetNum - elapsedTime).toFixed(2) + " segs";
                    }

                    if (elapsedTime > displayCron && jugando) {
                        // Ocultar cronometro / agregar transición
                        displayTwo.textContent = '';
                    }

                    // el -0.5 es para que el usuario vea la señal antes // >>>> Esto esta mal   
                    if (Math.abs((targetNum - elapsedTime) - 0.5) < tolerance) {

                        if (help) {
                            // Cambiar color del icono
                            iconBtn.classList.add('c-green');
                        }

                        setTimeout(() => {

                            // Lose
                            // Pierde por tiempo

                            if (jugando) {
                                iconBtn.classList.remove('c-green');
                                iconBtn.classList.add('c-red');
                            }

                            setTimeout(() => {
                                reset();
                            }, 500);
                        }, 500);
                    }
                }, 100);

                return;

            } else {

                jugando = false;

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

                firstClick = 0;
                return;
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
        }

        function success() {

            // Actualizar contador
            const victories = document.querySelector('#mens-victories');
            victoriesAcu++;
            victories.textContent = victoriesAcu;

            // Nuevo número random entre 3 y 15
            targetNum = getRandomInt(3, 15);
                    
            if(localStorage.getItem('RECORD')) {
                let record = localStorage.getItem('RECORD');

                const mensRecord = document.querySelector('#mens-record');
                mensRecord.textContent = record;

                if( victoriesAcu > record) {
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
});