<?php

//ini_set("display_errors", 1);


require_once __DIR__ . "/../../config/config.php";
class Connection
{
    /**
     * Instancia de la configuracion para la conexion
     */
    private $conf;
    /**
     * Instancia de PDO
     */
    public function __construct()
    {
        try {
            // Se traen los datos para la conexion
            $this->conf = new Config();
            $this->conf = $this->conf->getDatabase();
            // Crear nueva conexión PDO
        } catch (PDOException $e) {
            error_log($e, 3, __DIR__ . "/error.log");
            return false;
        }
    }
    /**
     * Crear una nueva conexión PDO basada
     * en los datos de conexión
     * @return PDO Objeto PDO
     */
    public function get_db()
    {
        // Se inicializa un nuevo objeto de tipo PDO
        $driver = new PDO(
            $this->conf['type'] . ":dbname=" . $this->conf['database'] .
                ";host=" . $this->conf['host'] .
                ";port:" . $this->conf['port'] .
                ";",
            $this->conf['user'],
            $this->conf['password'],
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        // Habilitar excepciones
        $driver->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $driver;
    }
}
