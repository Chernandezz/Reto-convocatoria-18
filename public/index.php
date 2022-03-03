<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\PaginasController;
use Controllers\VehiculosController;
use MVC\Router;

$router = new Router();

$router->get('/', [PaginasController::class, 'index']);
$router->get('/ingresar', [VehiculosController::class, 'ingresar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
