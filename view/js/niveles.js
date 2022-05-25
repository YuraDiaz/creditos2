var enviar = (opcion, elemento) => {
    switch (opcion) {
        case 1:

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
                    confirmButtonText: 'Siguiente nivel <i class="bi bi-caret-right"></i>',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "level2";
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


    }
}

var segundoNivel = (opcion, elemento) => {
    switch (opcion) {
        case 1:

            if (elemento.value == "osco") {
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
            if (elemento.value == "piko") {
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
            if (elemento.value == "yalo") {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Respuesta Correcta!!!!!',
                    icon: 'success',
                    confirmButtonText: 'Siguiente Nivel <i class="bi bi-caret-right"></i>',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "level3";
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


    }
}

var tercerNivel = (opcion, elemento) => {
    switch (opcion) {
        case 1:

            if (elemento.value == "tcik") {
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
            if (elemento.value == "milisik") {
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
            if (elemento.value == "tcukul") {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Respuesta Correcta!!!!!',
                    icon: 'success',
                    confirmButtonText: 'Regresar al inicio <i class="bi bi-caret-right"></i>',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "niveles"
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


    }
}
window.onload = () => {

};