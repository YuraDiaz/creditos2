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
        })

    })
};


window.onload = () => {

    enviar();
};