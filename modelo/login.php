<?php
require "modelo/conexion.php";
class Login 
{
    private $_db;
    public function __construct()
    {
        $this->_db = new Conexion();
    }

    public function login ($email,$password){
        $this->_db->conectar();//nos conectamos a la db
        $r = $this->_db->conexion->prepare("SELECT * FROM login WHERE email = '".$email."' AND password = '".$password."'");
        $r->execute();
        $this->_db->desconectar();

        if ($r->fetch(PDO::FETCH_OBJ))
        return true;
    else
    return false; 
    
    }

    


}