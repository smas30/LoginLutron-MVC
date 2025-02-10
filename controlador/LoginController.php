<?php
session_start();

require "modelo/login.php";

/**
 * Summary of LoginController
 */
class LoginController
{

    /**
     * Summary of index
     * @return void
     */
    public static function index()
    {
        if (isset($_SESSION['login']))
            header('location:' . urlsite);
        require "vista/front/formlogin.php";
    }

    /**
     * Summary of login
     * @return void
     */
    public static function login()
    {
        $_modelo = new Login();
        $_email = trim($_POST['txtemail']);
        $_passw = md5(trim($_POST['txtpassword']));

        $_resultado = $_modelo->login($_email, $_passw);
        if ($_resultado) {
            $_SESSION['login'] = $_email;
            header('location:' . urlsite . "?page=admin");


        } else {
            header('location:' . urlsite . "?msg=No coinciden las credenciales");
        }
    }
    /**
     * Summary of logout
     * @return void
     */
    public static function logout()
    {
        if (!isset($_SESSION['login']))
            header('location' . urlsite); //redirige a la pagina
        unset($_SESSION['login']);
        session_destroy();
        header('location:' . urlsite);

    }



}