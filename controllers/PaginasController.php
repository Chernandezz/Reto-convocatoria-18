<?php

namespace Controllers;

// use Model\Producto;
use Model\Vehiculo;
use MVC\Router;

class PaginasController
{
    public static function index(Router $router)
    {
        $vehiculos = Vehiculo::all();

        $router->render('paginas/index', [
            'vehiculos' => $vehiculos,
        ]);

    }
}
