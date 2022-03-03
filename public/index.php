<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\PaginasController;
use Controllers\VehiculosController;
use MVC\Router;

$router = new Router();

$router->get('/', [PaginasController::class, 'index']);
$router->get('/ingresar', [VehiculosController::class, 'ingresar']);
$router->post('/ingresar', [VehiculosController::class, 'ingresar']);
$router->get('/editar', [VehiculosController::class, 'editar']);
$router->post('/editar', [VehiculosController::class, 'editar']);
$router->post('/eliminar', [VehiculosController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
