<?php

require_once("connection/dao.php");
class Usuarios extends DAO
{
    public function __construct()
    {
    }

    public function login($email)
    {
        $datos = $this->read("usuarios", "*", array($email), "email= ?");
        return $datos;
    }
    public function createUser($datos)
    {
        return $this->create("usuarios(identificacion, nombre, apellido, direccion, ciudad, email, pass, rol)", $datos);
    }
}
