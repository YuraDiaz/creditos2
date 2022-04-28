var closeSession = () => {
    let datos = new FormData();
    datos.append("option", 'closeSession');
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
        location.href = "login";
    });
};