<?php

namespace Controllers;

use MVC\Router;

class LoginController
{
    public static function Login(Router $router)
    {
        $router->render('auth/login', []);
    }
    public static function Logout()
    {
        echo "desde logout";
    }
    public static function crear(Router $router)
    {
        $router->render('auth/crear-cuenta');
    }
    public static function olvide()
    {
        echo "desde olvide password";
    }
    public static function recuperar()
    {
        echo "desde olvide recuperar";
    }
}
