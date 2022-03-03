<?php

namespace Controllers;

use Model\Vehiculo;
use MVC\Router;

class VehiculosController
{
    public static function ingresar(Router $router)
    {
        $vehiculo = new Vehiculo();

        // Arreglo con mensajes de errores
        $errores = Vehiculo::getErrores();

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            // Crea una nueva instacia

            $vehiculo = new Vehiculo($_POST['vehiculo']);

            $errores = $vehiculo->validar();

            //  Revisar que el arreglo de errores este vacio
            if (empty($errores)) {

                // Crear carpeta para subir imagenes
                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }

                $vehiculo->guardar();

            }

        }

        $router->render('vehiculos/ingresar', [
            'vehiculo' => $vehiculo,
            'errores' => $errores,
        ]);

    }
}
