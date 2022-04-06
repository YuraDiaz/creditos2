<?php

/**
 * Esta clase es la encargada de realizar las consultas a la base de datos
 * solamente este objeto puede hacer uso de el objeto PDO.
 */
require_once __DIR__ . "/connection.php";
class DAO
{
    private $pdo;
    protected function __construct()
    {
        // 
        // VACIO
        // 
    }
    private function sqlExecute($sql, $params = null, $read = false)
    {

        /**
         * Esta función es la encargada de realizar la ejecucion
         * de la consulta sql y la captura de errores
         * @sql es un string con la consulta para la base de datos
         * @params es un array para la base de datos
         * @read es una variable de tipo booleana si es false solo se retorna la ejecución de la cunsulta y no los datos
         */
        try {
            // INICIA CONEXION A BASE DE DATOS
            $this->pdo = new Connection();
            $this->pdo = $this->pdo->get_db();
            $query = $this->pdo->prepare($sql);

            if (empty($params))
                $params = array();
            if ($read) {
                $query->execute($params);
                return $query;
            }
            if ($res = $query->execute($params)) {
                $res_id = $this->pdo->lastInsertId();
                if ($res_id == 0)
                    return $res;
                return $res_id;
            }
            return $res;
        } catch (PDOException $e) {
            #return $e;
            return $e;
        }
    }
    protected function create($table, $params)
    {
        /**
         * Esta función inserta datos en la base de datos
         * @table es un string con el nombre de la tabla con los campos a insertar ej: tabla(campo1, campo2)
         * @params es un array con los datos a ingresar en la base de datos
         */
        $sql = "INSERT INTO " . $table . " VALUES(";
        for ($i = 1; $i < sizeof($params); $i++) {
            $sql .= "?,";
        }
        $sql .= "?)";
        //var_dump($sql);
        //var_dump($params);
        return $this->sqlExecute($sql, $params);
    }
    protected function read($table, $data, $params = null, $where = null)
    {
        /**
         * Esta funcion selecciona los datos de la base de datos
         * @data recibe un string con los campos a consultar
         * @table recibe el nombre de la tabla a consultar
         * @params es un arreglo con los datos como el id que se necesita para la consulta
         * @where es el condicional para la consulta en caso de ser necesario
         */

        $sql = "SELECT " . $data . " FROM " . $table;
        if (!empty($where))
            $sql .= " WHERE " . $where;
        if ($dbo = $this->sqlExecute($sql, $params, true))
            return $dbo->fetchAll(PDO::FETCH_ASSOC);
        return false;
    }
    protected function update($table, $params)
    {

        $sql = "UPDATE " . $table . " SET ";

        $i = 1;
        $tam = sizeof($params);
        $params2 = array();
        foreach ($params as $key => $value) {
            array_push($params2, $value);
            if ($i < $tam) {
                $sql .= $key . " = ? ";
                if ($i < $tam - 1)
                    $sql .= ", ";
            } else {
                $where = $key;
                $id = $value;
                break;
            }
            $i++;
        }
        $sql .= " WHERE " . $where . " = ?";

        //die($sql);

        return $this->sqlExecute($sql, $params2);
    }
    protected function delete($table, $where, $id)
    {
        /**
         * Esta función se encarga de eliminar un elemento de la base de datos
         * @table recibe un string con el nombre de la tabla a modificar
         * @where es un string en donde se pone el nombre del id de la tabla
         * @id es el id del elemento a eliminar
         */
        $sql = "DELETE FROM " . $table . " WHERE " . $where . " = ?";
        return $this->sqlExecute($sql, array($id));
    }
}
