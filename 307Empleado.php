<?php

/*  Copia la clase del ejercicio anterior en 307Empleado.php y modifícala.
Crea una clase Persona que sea padre de Empleado, de manera que Persona 
contenga el nombre y los apellidos, y en Empleado quede el salario y los teléfonos. */

declare(strict_types=1);

include "307Persona.php";

class Empleado307 extends Persona
{
    private static $sueldoTope;
    private array $numeros;
    private float $sueldo;

    public function __construct(string $nombre, string $apellidos, $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos);
        $this->sueldo = $sueldo;
        $this->numeros = []; //para poner como php8 los que sean de persona sin el private y los que sean de empleado con private
    }

    public function setSueldo(float $sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public static function setSueldoTope(float $sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;
    }

    public static function getSueldoTope(): float
    {
        return self::$sueldoTope;
    }

    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope ? true : false;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->numeros[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        return implode(", ", $this->numeros);
    }

    public function vaciarTelefonos(): void
    {
        $this->numeros = [];
    }

    public function toHtml(): string
    {
        $cadenaHtml = "<p><b>Datos del empleado</b></p><p>";
        $cadenaHtml .= "Nombre: " . $this->getNombre() . "</p>" .
            "<p>Apellidos: " . $this->getApellidos() . "</p>" .
            "<p>Sueldo: " . $this->getSueldo() . "€ </p>" .
            "Listado de teléfonos: " .
            "<ol>";

        foreach (explode(",", $this->listarTelefonos()) as $telefono) {
            $cadenaHtml .= "<li>" . $telefono . "</li>";
        }
        $cadenaHtml .= "</ol>";

        return $cadenaHtml;
    }
}


$emp = new Empleado307("Susana", "Torio", 1500);
$emp->anyadirTelefono(4568879);
$emp->anyadirTelefono(7954687);
Empleado307::setSueldoTope(3500);

//Función toHtml
echo $emp->toHtml();

echo "<br>";

$per = new Persona("Helen", "Chufe");
echo $per->toHtml();
