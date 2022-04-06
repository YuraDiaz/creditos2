<?php
class config
{
    private $uri = "http://localhost/LenguaNamuyWam";

    private $database = [
        "type" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "user" => "root",
        "database" => "creditos2",
        "password" => ""
    ];

    function getUri()
    {
        return $this->uri;
    }

    function getDatabase()
    {
        return $this->database;
    }
}
