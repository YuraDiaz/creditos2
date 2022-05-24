<?php
require_once("../model/usuarios.php");
session_start();
$users = new Usuarios();
$option = $_POST["option"];

switch ($option) {

    case "login":
        if (!isset($_POST["identificacion"]) && isset($_POST["correo"]) && isset($_POST["pass"])) {
            if (count($d = $users->login($_POST["correo"])) > 0 && password_verify($_POST["pass"], $d[0]["pass"])) {
                $_SESSION["usuario_doc"] = $d[0]["identificacion"];
                $_SESSION["usuario_name"] = $d[0]["nombre"] . " " . $d[0]["apellido"];
                session_write_close();
                die("ok");
            } else {
                die("error");
            }
        } else {
            die("incompletos");
        }

        break;

    case "register":
        if (isset($_POST["identificacion"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["direccion"]) && isset($_POST["ciudad"]) && isset($_POST["correo"]) && isset($_POST["pass"])) {
            $aux = password_hash($_POST["pass"], PASSWORD_BCRYPT);
            if (count($users->getByDocument($_POST["identificacion"])) == 0) {
                if (count($users->login($_POST["correo"])) == 0) {
                    if (gettype($d = $users->createUser(array($_POST["identificacion"], $_POST["nombre"], $_POST["apellido"], $_POST["direccion"], $_POST["ciudad"], $_POST["correo"], $aux, 2))) == "string") {
                        die("ok");
                    } else {
                        die("error bd");
                    }
                } else {
                    die("correo reg");
                }
            } else {
                die("documento reg");
            }
        } else {
            die("incompleto");
        }
        break;
    case "update":
        if (isset($_POST["id"]) && isset($_POST["identificacion"]) && isset($_POST["nombres"]) && isset($_POST["apellidos"]) && isset($_POST["direccion"]) && isset($_POST["ciudad"]) && isset($_POST["correo"])) {

            if (count($ant = $users->getById($_POST["id"])) > 0) {
                if ($ant[0]["identificacion"] == $_POST['identificacion'] || count($users->getByDocument($_POST['identificacion'])) == 0) {
                    if ($ant[0]["email"] == $_POST['correo'] || count($users->login($_POST["correo"])) == 0) {
                        $datos = [
                            "identificacion" => $_POST["identificacion"],
                            "nombre" => $_POST["nombres"],
                            "apellido" => $_POST["apellidos"],
                            "direccion" => $_POST["direccion"],
                            "ciudad" => $_POST["ciudad"],
                            "email" => $_POST["correo"],
                            "id" => $_POST["id"]
                        ];
                        if ($users->updateUser($datos)) {
                            die("ok");
                        } else {
                            die("error bd");
                        }
                    } else {
                        die("correo reg");
                    }
                } else {
                    die("documento reg");
                }
            } else {
                die("id inexistente");
            }
        } else {
            die("incompleto");
        }
        break;
    case "updatePass":
        if (isset($_POST["pass"]) && isset($_POST["idPass"]) && isset($_POST["contrasenia"])) {

            if (count($ant = $users->getById($_POST["idPass"])) > 0) {
                if (password_verify($_POST["pass"], $ant[0]["pass"])) {
                    $aux = password_hash($_POST["contrasenia"], PASSWORD_BCRYPT);
                    $datos = [
                        "pass" => $aux,
                        "id" => $_POST["idPass"]
                    ];
                    if ($users->updateUser($datos)) {
                        die("ok");
                    } else {
                        die("error bd");
                    }
                } else {
                    die("pass incorrecta");
                }
            } else {
                die("id inexistente");
            }
        } else {
            die("incompleto");
        }
        break;
    case "getUser":
        die(json_encode($users->getByDocument($_SESSION["usuario_doc"])[0]));
        break;
    case "closeSession":
        session_reset();
        session_destroy();
        die("ok");
        break;
    default:
        die("PETICION NO SOPORTADA");
        break;
}
