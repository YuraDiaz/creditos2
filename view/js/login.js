var enviar = async () => {
    let formulario = document.getElementById("login");
    formulario.addEventListener("submit", (e) => {
        e.preventDefault();
        let d = new FormData(formulario);
        let env = fetch("controller/usuarios.php", {
            method: "POST",
            body: d
        }).then((response) => {
            if (response.ok) {
                return response.text();
            } else {
                throw "error al enviar"
            }
        }).then((resp) => {
            console.log(resp);
            if (resp == "0") {
                Swal.fire({
                    title: 'Error!',
                    text: 'El Usuario o contraseña son incorrectos',
                    icon: 'error',
                    confirmButtonText: 'Intentar nuevamente',
                    allowOutsideClick: false
                })
            } else {
                location.href = "view/inicio";
            }
        })

    })
};


window.onload = () => {

    enviar();
};