<?php

/* 311PersonaA.php: Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método toHtml() tenga que ser redefinido en todos sus hijos. */

declare(strict_types=1);

abstract class Persona311
{
    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad,
    ) {
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public static abstract function toHtml(Persona311 $p): string;

    public function __toString(): string
    {
        return  "Nombre: " . $this->nombre . "<br> " . "Apellidos: " . $this->apellidos
            . "<br>" . "Edad: " . $this->edad;
    }
}

class Empleado311 extends Persona311
{
    private static $sueldoTope;
    private array $numeros;

    public function __construct(string $nombre, string $apellidos, int $edad, private float $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->numeros = [];
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
        if ($this->sueldo > self::$sueldoTope && $this->edad > 21) {
            return true;
        } else {
            return false;
        }
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

    public static function toHtml(Persona311 $p): string
    {
        $cadenaHtml = "<p><b>Datos del empleado</b></p><p>";
        $cadenaHtml .= "Nombre: " . $p->getNombre() . "</p>" .
            "<p>Apellidos: " . $p->getApellidos() . "</p>";

            if ($p instanceof Empleado311) {
                $cadenaHtml .=  "<p>Sueldo: " . $p->getSueldo() . "€ </p>" .
                "Listado de teléfonos: " .
                "<ol>";
    
            foreach (explode(",", $p->listarTelefonos()) as $telefono) {
                $cadenaHtml .= "<li>" . $telefono . "</li>";
            }
            $cadenaHtml .= "</ol>"; 
            }

        return $cadenaHtml;
    }

    public function __toString(): string
    {
        return parent::__toString() . "<br>"
            . "Sueldo: " . $this->sueldo . "<br> Teléfonos: " . $this->listarTelefonos();
    }
}

$emp = new Empleado311("Andrés", "Trozado", 25);
$emp->anyadirTelefono(54654654);
$emp->anyadirTelefono(44454545);

echo Empleado311::toHtml($emp);

echo $emp->__toString();
