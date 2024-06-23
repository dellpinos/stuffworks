

// Sin terminar

// window.addEventListener('DOMContentLoaded', () => {

//     if (document.querySelector('#inicio-hora')) {
//         main();
//     }

//     function main() {


const ArrayNestling = () => {

    

Array.prototype.sameStructureAs = function (other) {
    // Return 'true' if and only if 'other' has the same
    // nesting structure as 'this'.


        // Mientras que sea un array debo ingresar dentro y comparar

        let iguales = true;

        while(iguales) {

            if(Array.isArray(this) && Array.isArray(other)) {

                // Ambos son arrays

                this.forEach( (el, i) => {

                    if(Array.isArray(el) && Array.isArray(other[i])) {

                        // Ambos son arrays

                        other[i].forEach( (ol, y) => {

                            if(Array.isArray(ol) && Array.isArray(el[y])) {
        
                                // Ambos son arrays
        
                                
        
                            }
                        });
                    }
                });
            }
        }
    }


    // Note: You are given a function isArray(o) that returns
    // whether its argument is an array.
};


// console.log([1,1,1].sameStructureAs([2,2,2]));


ArrayNestling();



// Complete the function/method (depending on the language) to return true/True when its argument is an array that has the same nesting structures and same corresponding length of nested arrays as the first array.


// isTrue([1,1,1].sameStructureAs([2,2,2])


//  // should return true
//  [ 1, 1, 1 ].sameStructureAs( [ 2, 2, 2 ] );          
//  [ 1, [ 1, 1 ] ].sameStructureAs( [ 2, [ 2, 2 ] ] );  
 
//   // should return false 
//  [ 1, [ 1, 1 ] ].sameStructureAs( [ [ 2, 2 ], 2 ] );  
//  [ 1, [ 1, 1 ] ].sameStructureAs( [ [ 2 ], 2 ] );  
 
//  // should return true
//  [ [ [ ], [ ] ] ].sameStructureAs( [ [ [ ], [ ] ] ] ); 
 
//  // should return false
//  [ [ [ ], [ ] ] ].sameStructureAs( [ [ 1, 1 ] ] );  