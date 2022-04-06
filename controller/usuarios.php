<?php
require_once("../model/usuarios.php");
session_start();
$users = new Usuarios();

switch ($_SERVER['REQUEST_METHOD']) {

    case "POST":
        if (!isset($_POST["identificacion"]) && isset($_POST["correo"]) && isset($_POST["pass"])) {
            if (count($d = $users->login($_POST["correo"])) > 0 && password_verify($_POST["pass"], $d[0]["pass"])) {
                $_SESSION["usuario_doc"] = $d[0]["documento"];
                session_write_close();
                die("1");
            } else {
                die("0");
            }
        } elseif (isset($_POST["identificacion"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["direccion"]) && isset($_POST["ciudad"]) && isset($_POST["correo"]) && isset($_POST["pass"])) {
            $aux = password_hash($_POST["pass"], PASSWORD_BCRYPT);
            if (gettype($d = $users->createUser(array($_POST["identificacion"], $_POST["nombre"], $_POST["apellido"], $_POST["direccion"], $_POST["ciudad"], $_POST["correo"], $aux, 2))) == "string") {
                die("1");
            } else {
                die(json_encode($d));
            }
        } else {
            die("0");
        }
        break;
    default:
        die("PETICION NO SOPORTADA");
        break;
}
