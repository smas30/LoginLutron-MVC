<?php
class Conexion
{
    public $conexion;

    public function conectar()
    {

        try {
            $conn = "mysql:host=localhost; dbname=" . DB_NAME;
            $opciones = array(
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
            $this->conexion = new PDO($conn, DB_USER, DB_PASS);
            echo "Conexion a BBDD exitosa";
            return $this->conexion;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function desconectar()
    {
        $this->conexion = null;
    }
}
