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
    public function getById($id)
    {
        $datos = $this->read("usuarios", "*", array($id), "id= ?");
        return $datos;
    }
    public function getByDocument($documento)
    {
        $datos = $this->read("usuarios", "id, identificacion, nombre, apellido, direccion, ciudad, email, rol", array($documento), "identificacion= ?");
        return $datos;
    }
    public function createUser($datos)
    {
        return $this->create("usuarios(identificacion, nombre, apellido, direccion, ciudad, email, pass, rol)", $datos);
    }
    public function updateUser($datos)
    {
        return $this->update("usuarios", $datos);
    }
}
