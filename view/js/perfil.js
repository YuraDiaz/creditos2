var mostrarSweet = datos => {
    return (Swal.fire({
        title: datos.icono == 'success' ? "Exito!" : "Error!",
        text: datos.texto,
        icon: datos.icono,
        confirmButtonText: 'Continuar',
        allowOutsideClick: false
    }).then((result) => {
        location.reload();
    }));
}
var deshabilitarForm = () => {
    let campos = document.getElementById("form_user").elements;
    for (const d in campos) {
        console.log(campos[d].disabled = true);
    }
    let btneditar = document.getElementById('btneditar');
    btneditar.innerHTML = 'Editar';
    btneditar.removeAttribute('onclick');
    btneditar.setAttribute('onclick', 'habilitarForm();');
    document.getElementById('btncancelar').style.display = 'none';

};
var habilitarForm = () => {
    let campos = document.getElementById("form_user").elements;
    for (const d in campos) {
        console.log(campos[d].disabled = false);
    }
    let btneditar = document.getElementById('btneditar');
    btneditar.innerHTML = 'Guardar';
    btneditar.removeAttribute('onclick');
    btneditar.setAttribute('onclick', 'enviarDatos();');
    document.getElementById('btncancelar').style.display = '';
};
var enviarDatos = async () => {
    let datos = new FormData(document.getElementById('form_user'));
    datos.append("option", 'update');
    fetch('../controller/usuarios.php', {
        method: "POST",
        body: datos
    }).then((response) => {
        if (response.ok) {
            return response.text();
        } else {
            throw "error al enviar"
        }
    }).then((resp) => {
        console.log(resp);
        if (resp == "ok") {
            mostrarSweet({
                texto: 'Usuario modificado correctamente',
                icono: 'success'
            });
        } else if (resp == "error bd") {
            mostrarSweet({
                texto: 'Hubo un error al registrar',
                icono: 'error'
            });
        } else if (resp == "documento reg") {
            mostrarSweet({
                texto: 'El documento ya se encuentra registrado en otra cuenta',
                icono: 'error'
            });

        } else if (resp == "correo reg") {
            mostrarSweet({
                texto: 'El correo electronico ya se encuentra registrado en otra cuenta',
                icono: 'error'
            });

        }
    });


};
var compararPass = () => {
    let pass1 = document.getElementById('contrasenia');
    let pass2 = document.getElementById('contraseniarep');
    if (pass1.value != pass2.value) {
        document.getElementById('alertaPass').style.display = '';
        document.getElementById('envFormPass').disabled = true;
    } else {
        console.log("hola");
        document.getElementById('alertaPass').style.display = 'none';
        document.getElementById('envFormPass').disabled = false;

    }
};
var traerDatos = async () => {
    let aux = new FormData();
    aux.append("option", "getUser");

    fetch('../controller/usuarios.php', {
        method: "POST",
        body: aux
    }).then((response) => {
        if (response.ok) {
            return response.json();
        } else {
            throw "error al enviar"
        }
    }).then((resp) => {
        cargarDatosFormulario(resp);
    });
}

var cargarDatosFormulario = datos => {
    document.getElementById("identificacion").value = datos.identificacion;
    document.getElementById("id").value = datos.id;
    document.getElementById("idPass").value = datos.id;
    document.getElementById("nombres").value = datos.nombre;
    document.getElementById("apellidos").value = datos.apellido;
    document.getElementById("direccion").value = datos.direccion;
    document.getElementById("ciudad").value = datos.ciudad;
    document.getElementById("correo").value = datos.email;
};
var cambiarPass = (evento, formulario) => {
    evento.preventDefault();
    let datos = new FormData(formulario);
    datos.append("option", 'updatePass');
    fetch('../controller/usuarios.php', {
        method: "POST",
        body: datos
    }).then((response) => {
        if (response.ok) {
            return response.text();
        } else {
            throw "error al enviar"
        }
    }).then((resp) => {
        console.log(resp)
        if (resp == "ok") {
            mostrarSweet({
                texto: 'Contraseña actualizada correctamente',
                icono: 'success'
            });
        } else if (resp == "error bd") {
            mostrarSweet({
                texto: 'Hubo un error al registrar',
                icono: 'error'
            });
        } else if (resp == "pass incorrecta") {
            mostrarSweet({
                texto: 'La contraseña anterior es incorrecta',
                icono: 'error'
            });
        } else {
            mostrarSweet({
                texto: 'Hubo un problema, intenta mas tarde',
                icono: 'error'
            });
        }
    });

}

window.onload = () => {
    document.getElementById('alertaPass').style.display = 'none';
    deshabilitarForm();
    traerDatos();
};