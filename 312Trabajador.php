<?php

/* 
312Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.

    Cambia la estructura de clases conforme al gráfico respetando todos los métodos que ya están hechos.
    Trabajador es una clase abstracta que ahora almacena los telefonos y donde calcularSueldo es un método abstracto.
    El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por hora.
    Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: salario + salario*edad/100
*/

declare(strict_types=1);

abstract class Persona312
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

    public static abstract function toHtml(Persona312 $p): string;

    public function __toString(): string
    {
        return  "Nombre: " . $this->nombre . "\n" . "Apellidos: " . $this->apellidos
            . "\n" . "Edad: " . $this->edad;
    }
}

abstract class Trabajador312 extends Persona312
{
    private static $sueldoTope;
    private array $numeros;

    public function __construct(string $nombre, string $apellidos, int $edad)
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->numeros = [];
    }

    public static function setSueldoTope(float $sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;
    }

    public static function getSueldoTope(): float
    {
        return self::$sueldoTope;
    }

    public abstract function calcularSueldo();

    public function debePagarImpuestos(): bool
    {
        if ($this->calcularSueldo() > self::$sueldoTope && $this->edad > 21) {
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

    public static function toHtml(Persona312 $p): string
    {
        $cadenaHtml = "<p><b>Datos:</b></p><p>";
        $cadenaHtml .= "Nombre: " . $p->getNombre() . "</p>" .
            "<p>Apellidos: " . $p->getApellidos() . "</p>" .
            "<p>Edad: " . $p->getEdad() . "</p>" .
            "Listado de teléfonos: " .
            "<ol>";

        if ($p instanceof Trabajador314) {
            foreach (explode(", ", $p->listarTelefonos()) as $telefono) {
                $cadenaHtml .= "<li>" . $telefono . "</li>";
            }
        }

        $cadenaHtml .= "</ol>";

        return $cadenaHtml;
    }

    public function __toString(): string
    {
        return parent::__toString() . "\n"
            .  "\nTeléfonos: " . $this->listarTelefonos();
    }
}


class Empleado312 extends Trabajador312
{
    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad,
        private int $horasTrabajadas,
        private float $precioPorHora
    ) {
        parent::__construct($nombre, $apellidos, $edad);
    }

    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    public function getPrecioPorHora(): float
    {
        return $this->precioPorHora;
    }

    public function calcularSueldo()
    {
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    public static function toHtml(Persona312 $p): string
    {
        $cadenaHtml = "";
        $cadenaHtml .= parent::toHtml($p);
        if ($p instanceof Empleado312) {
            $cadenaHtml .= "Horas Trabajadas: " . $p->getHorasTrabajadas() . "<br>" .
                "Precio por hora: " . $p->getPrecioPorHora() . "<br>";
        }
        return $cadenaHtml;
    }

    public function __toString(): string
    {
        return parent::__toString() . "\n" .
            "Horas trabajadas: " . $this->horasTrabajadas . "\n" .
            "Precio por hora: " . $this->precioPorHora . "\n";
    }
}

class Gerente312 extends Trabajador312
{
    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad,
        private float $salarioBase = 1000
    ) {
        parent::__construct($nombre, $apellidos, $edad);
    }

    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }

    public function calcularSueldo()
    {
        return $this->salarioBase + $this->salarioBase * $this->getEdad() / 100;
    }

    public static function toHtml(Persona312 $p): string
    {
        $cadenaHtml = "";
        $cadenaHtml .= parent::toHtml($p);
        if ($p instanceof Gerente312) {
            $cadenaHtml .= "Salario base: " . $p->getSalarioBase() . "<br>";
        }
        return $cadenaHtml;
    }

    public function __toString(): string
    {
        return parent::__toString() . "\n" .
            "Salario base: " . $this->salarioBase . "\n";
    }
}
