
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

const dorado = "#fbb106";
const amarillo = "#ffd53a";
const grisOscuro = "#1c1916";


Swal.fire({
    title: 'Tiempo cumplido!',
    width: '500px',
    heightAuto: 'false',
    background: grisOscuro,
    border: '#FFF',
    color: dorado,
    padding: '30px',
    text: 'Deberias descansar un poco, podés seguir en otro momento.',
    icon: 'success',
    confirmButtonText: 'Thanks!',
    confirmButtonColor: dorado
})