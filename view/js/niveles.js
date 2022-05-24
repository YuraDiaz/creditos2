var enviar = (opcion, elemento) => {
    switch (opcion) {
        case 1:
            console.log(elemento.value)
            if (elemento.value == "Ñim") {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Respuesta Correcta!!!!!',
                    icon: 'success',
                    confirmButtonText: 'Siguiente pregunta <i class="bi bi-caret-right"></i>',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        let s = document.getElementById("p2-tab");
                        s.click();
                    }
                });
            } else {
                Swal.fire({
                    title: 'Incorrecta!',
                    text: 'Respuesta Incorrecta!!!!!',
                    icon: 'error',
                    confirmButtonText: 'Intentar Nuevamente',
                    allowOutsideClick: false
                })
            }



            break;

        case 2:
            if (elemento.value == "na") {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Respuesta Correcta!!!!!',
                    icon: 'success',
                    confirmButtonText: 'Siguiente pregunta <i class="bi bi-caret-right"></i>',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        let s = document.getElementById("p3-tab");
                        s.click();
                    }
                });
            } else {
                Swal.fire({
                    title: 'Incorrecta!',
                    text: 'Respuesta Incorrecta!!!!!',
                    icon: 'error',
                    confirmButtonText: 'Intentar Nuevamente',
                    allowOutsideClick: false
                })
            }
            break;

        case 3:
            if (elemento.value == "nom") {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Respuesta Correcta!!!!!',
                    icon: 'success',
                    confirmButtonText: 'Siguiente pregunta <i class="bi bi-caret-right"></i>',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        let s = document.getElementById("p2-tab");
                        s.click();
                    }
                });
            } else {
                Swal.fire({
                    title: 'Incorrecta!',
                    text: 'Respuesta Incorrecta!!!!!',
                    icon: 'error',
                    confirmButtonText: 'Intentar Nuevamente',
                    allowOutsideClick: false
                })
            }
            break;

        default:
            break;
    }
}

window.onload = () => {

};