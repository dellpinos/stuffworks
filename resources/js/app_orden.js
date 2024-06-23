// Una funcion que recibe un array de numeros y retorna el numero mas bajo, el mas alto y la suma de todos


const arrayPrueba = [12, 2, 42, 3, 655, 12, 1, -9, 0, 12, 1];

const respuesta = ejemplo(arrayPrueba);

console.log(respuesta);

// respuesta.forEach( el => {
//     console.log(el);
// });

function ejemplo(array) {

    if(!array.lenght){
        return 'vacio! esto proviene de app_orden que aún no tiene una página';
    } else {

        let minimo = array[0];
        let max = array[0];
        let suma = 0;
    
        array.forEach(element => {
            
            if(element < minimo) {
                minimo = element;
            }
            if(element > max) {
                max = element;
            }
    
            suma += element;
        });
    
        //return [minimo, max, suma];
    
        return minimo + max;
    }


}