<?php

namespace Model;

class ActiveRecord
{

    // Base de datos
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';

    // Errores
    protected static $errores = [];

    //Definir la conexion a la Base de datos
    public static function setDB($database)
    {
        self::$db = $database;
    }

    public function guardar()
    {
        if (!is_null($this->placa)) {
            // Actualizando un registro
            $this->crear();
            // debuguear($this);

        } else {
            // Creando un nuevo registro
            $this->actualizar();
        }
    }

    public function crear()
    {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Insertar en la base de datos
        $query = "INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '", array_values($atributos));
        $query .= " ');";
        $resultado = self::$db->query($query);

        if ($resultado) {
            // Redireccionar al Usuario
            header("Location: /?accion=1");
        }

    }

    // Actualizar Registro
    public function actualizar()
    {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        $valores = [];
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key} = '{$value}'";
        }

        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE placa = '" . self::$db->escape_String($this->placa) . "' ";
        $query .= " LIMIT 1; ";

        $resultado = self::$db->query($query);

        if ($resultado) {
            // Redireccionar al Usuario
            header("Location: /admin?accion=2");
        }
    }

    // Eliminar un registro
    public function eliminar()
    {
        // Eliminar Registro
        $query = "DELETE FROM " . static::$tabla . " WHERE placa = " . self::$db->escape_string($this->placa) . " LIMIT 1 ";
        $resultado = self::$db->query($query);
        if ($resultado) {
            header("Location: /?accion=3");
        }

    }

    public function atributos()
    {
        $atributos = [];
        foreach (static::$columnasDB as $columna) {

            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos()
    {
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }

        return $sanitizado;
    }

    // Validacion

    public static function getErrores()
    {
        return static::$errores;
    }

    public function validar()
    {
        static::$errores = [];
        return static::$errores;
    }

    // Lista todos los Registros
    public static function all()
    {
        $query = "SELECT * FROM " . static::$tabla . ";";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    // Busca una tupla por su placa
    public static function find($placa)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE placa = '${placa}'";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }

    public static function consultarSQL($query)
    {
        // Consultar la BD
        $resultado = self::$db->query($query);

        // Iterar las resultados
        $array = [];
        while ($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        // Liberar memoria
        $resultado->free();

        // Retornar resultados
        return $array;
    }

    protected static function crearObjeto($registro)
    {
        $objeto = new static;
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }

        return $objeto;
    }

    // Sincroniza el objeto en memoria con los cambios realizador por el usuario
    public function sincronizar($args = [])
    {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }

}
