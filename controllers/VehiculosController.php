<?php

namespace Controllers;

use DateTime;
use Model\Vehiculo;
use MVC\Router;

class VehiculosController
{
    public static function ingresar(Router $router)
    {
        $vehiculo = new Vehiculo;

        // Arreglo con mensajes de errores
        $errores = Vehiculo::getErrores();

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            // Crea una nueva instacia
            $vehiculo = new Vehiculo($_POST);
            $vehiculo->placa = strtoupper($vehiculo->placa);

            $errores = $vehiculo->validar();

            //  Revisar que el arreglo de errores este vacio
            if (empty($errores)) {

                $vehiculo->guardar();

            }

        }

        $router->render('vehiculos/ingresar', [
            'vehiculo' => $vehiculo,
            'errores' => $errores,
        ]);

    }

    public static function editar(Router $router)
    {
        $placa = validarORedireccionar('/');

        // Arreglo con mensajes de errores
        $errores = Vehiculo::getErrores();
        $vehiculo = Vehiculo::find($placa);

        $router->render('vehiculos/editar', [
            'vehiculo' => $vehiculo,
            'errores' => $errores,
        ]);

    }

    public static function salida(Router $router)
    {
        $placa = validarORedireccionar('/');

        // Arreglo con mensajes de errores
        $errores = Vehiculo::getErrores();
        $vehiculo = Vehiculo::find($placa);

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $vehiculo->salida();

            if ($_POST['tipoCliente'] === 'Invitado') {
                $ingreso = new DateTime($vehiculo->ingreso);
                $salida = new DateTime($vehiculo->salida);
                $tiempo = $ingreso->diff($salida);
                // debuguear($tiempo);
                $minutos = $tiempo->h * 60;
                $minutos = $minutos + $tiempo->i;
                $total = $minutos * 200;
                header("Location: /?accion=4&t=${total}");

            }
            if ($_POST['tipoCliente'] === 'Residente') {
                header("Location: /?accion=2");

            }
            if ($_POST['tipoCliente'] === 'Oficial') {
                header("Location: /?accion=3");
            }

        }

        $router->render('vehiculos/salida', [
            'vehiculo' => $vehiculo,
            'errores' => $errores,
        ]);
    }
}
