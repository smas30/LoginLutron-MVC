<?php
require "config.php";

//leer variable de la pagina donde estamos
$page = "index";
if (isset($_GET['page']))
    $page = $_GET['page'];
switch ($page) {
    case 'login':
        require "controlador/LoginController.php";
        LoginController::index(); //metodo index
        break;
    case 'loginauth':
        require "controlador/LoginController.php";
        LoginController::login(); //metodo login
        break;
    case 'logout':
        require "controlador/LoginController.php";
        LoginController::logout(); //metodo logout
        break;
    case 'admin':
        //echo "Estoy Loggeado con el usuario Admin";
        require "vista/admin/welcome.php";
        break;

    default:
        echo "<a href='" . urlsite . "/?page=login'>LOGIN</a>";
        break;
}







/**
 * require "modelo/conexion.php";
*$db = new Conexion();
*$db->conectar();
*require "vista/layouts/header.php";
*require "vista/layouts/footer.php";

 */

