
window.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#header-icon-container')) {

        const iconBtnCont = document.querySelector('#header-icon-container');
        const displayOne = document.querySelector('#header-icon-display');
        const iconBtn = document.querySelector('#header-icon');
        let firstClick = 0;
        let firstClickObj = '';
        let flag = true; // flag de un solo intento

        const targetNum = 6; // segs
        const tolerance = 0.1; // segs
        const displayCron = 3; // segs

        iconBtnCont.addEventListener('mouseover', () => {

            displayOne.textContent = "Click Me!";
        });

        iconBtnCont.addEventListener('mouseleave', () => {

            displayOne.textContent = "";
        });

        iconBtnCont.addEventListener('click', () => {

            if (firstClick === 0) {

                firstClickObj = new Date();
                firstClick = Math.floor(firstClickObj.getTime() / 1000).toFixed(2);

                setInterval(() => {
                    const elapsedTime = updateTimer();


                    if (elapsedTime <= targetNum) {
                        displayOne.textContent = elapsedTime;
                        
                    }

                    if(elapsedTime > displayCron) {

                        // Ocultar cronometro / agregar transición
                        displayOne.textContent = '';
                    }

                    if(Math.abs((targetNum - elapsedTime) - 0.5) < tolerance) {

                        // Cambiar color del icono
                        iconBtn.classList.add('c-green');

                        setTimeout(() => {
                            iconBtn.classList.remove('c-green');
                            iconBtn.classList.add('c-red');

                            
                            setTimeout(() => {
                                reset();
                            }, 500);
                        }, 500);
                    } else {
                        
                        // Cambiar color del icono
                        // console.log('no!');
                    }
                    

                }, 100);

                return;

            } else {

                const secondClick = new Date();
                const secondClickInSecs = Math.floor(secondClick.getTime() / 1000).toFixed(2);


                // Math.abs() ignora el signo del número, de esta forma la tolerancia funciona hacia "arriba" o hacia "abajo"
                if(Math.abs(targetNum - (secondClickInSecs - firstClick)) <= tolerance) {
                    // utilizar la funcion updateTimer()

                    alert('Exito!');
                    reset();
                    // Almacenar exito
                } else {

                    iconBtn.classList.add('c-red');

                    setTimeout(() => {

                        reset();

                        return;
                    }, 500);
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
        }
    }
});