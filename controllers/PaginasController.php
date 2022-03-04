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

        $accion = $_GET['accion'] ?? null;
        $total = $_GET['t'] ?? null;

        $router->render('paginas/index', [
            'vehiculos' => $vehiculos,
            'accion' => $accion,
            'total' => $total,
        ]);

    }
}
