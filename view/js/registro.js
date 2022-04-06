var enviar = async () => {
    let formulario = document.getElementById("registrar");
    formulario.addEventListener("submit", (e) => {
        e.preventDefault();
        let d = new FormData(formulario);
        if (d.get("pass") == d.get("pass2")) {
            let env = fetch("../controller/usuarios.php", {
                method: "POST",
                body: d
            }).then((response) => {
                if (response.ok) {
                    return response.text();
                } else {
                    throw "error al enviar"
                }
            }).then((resp) => {
                Swal.fire({
                    title: 'Exito!',
                    text: 'El Usuario ha sido registrado correctamente',
                    icon: 'success',
                    confirmButtonText: 'Continuar',
                    allowOutsideClick: false
                }).then((result) => {
                    location.reload();
                })
            })
        } else {
            document.getElementById("alerta").style.display = "block";
        }


    })
};


window.onload = () => {

    document.getElementById("alerta").style.display = "none";
    enviar();
};