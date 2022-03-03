<?php

namespace Model;

class Vehiculo extends ActiveRecord
{
    protected static $tabla = 'registro';
    protected static $columnasDB = ['placa', 'tipoCliente', 'tiempoAcumulado', 'ingreso', 'salida'];

    public $placa;
    public $tipoCliente;
    public $tiempoAcumulado;
    public $ingreso;
    public $salida;

    public function __construct($args = [])
    {
        $this->placa = $args['placa'] ?? null;
        $this->tipoCliente = $args['tipoCliente'] ?? null;
        $this->tiempoAcumulado = $args['tiempoAcumulado'] ?? null;
        $this->ingreso = $args['ingreso'] ?? null;
        $this->salida = $args['salida'] ?? null;

    }

    public function validar()
    {
        if (!$this->placa) {
            self::$errores[] = 'La Placa es Requerida';
        }

        return self::$errores;
    }

}
