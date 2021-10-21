<?php

/*
14EmpresaI.php: Copia las clases del ejercicio anterior y modifícalas.

    Crea un interfaz JSerializable, de manera que ofrezca los métodos:
        toJSON(): string → utiliza la función json_encode(mixed)
        toSerialize(): string → utiliza la función serialize(mixed)
    Modifica todas las clases que no son abstractas para que implementen el interfaz creado.

*/

declare(strict_types=1);

abstract class Persona314
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

    public static abstract function toHtml(Persona314 $p): string;

    public function __toString(): string
    {
        return  "Nombre: " . $this->nombre . "\n" . "Apellidos: " . $this->apellidos
            . "\n" . "Edad: " . $this->edad;
    }
}

abstract class Trabajador314 extends Persona314
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

    public static function toHtml(Persona314 $p): string
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


class Empleado314 extends Trabajador314 implements JSerializable
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

    public static function toHtml(Persona314 $p): string
    {
        $cadenaHtml = "";
        $cadenaHtml .= parent::toHtml($p);
        if ($p instanceof Empleado314) {
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

    public function toJSON(): string
    {
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return json_encode($json);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}

class Gerente314 extends Trabajador314 implements JSerializable
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

    public static function toHtml(Persona314 $p): string
    {
        $cadenaHtml = "";
        $cadenaHtml .= parent::toHtml($p);
        if ($p instanceof Gerente314) {
            $cadenaHtml .= "Salario base: " . $p->getSalarioBase() . "<br>";
        }
        return $cadenaHtml;
    }

    public function __toString(): string
    {
        return parent::__toString() . "\n" .
            "Salario base: " . $this->salarioBase . "\n";
    }

    public function toJSON(): string
    {
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return json_encode($json);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}


class Empresa314
{
    private string $nombreEmpresa;
    private string $direccion;
    private array $trabajadores;

    public function __construct()
    {
        $this->trabajadores = [];
    }

    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getNombreEmpresa(): string
    {
        return $this->nombreEmpresa;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function anyadirTrabajador(Trabajador314 $t)
    {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml()
    {
        $cadenaHtml = "";
        foreach ($this->trabajadores as $tr) {
            if ($tr instanceof Empleado314) {
                $cadenaHtml .= "<b>Empleado</b> <br>" .
                    Empleado314::toHtml($tr);
            } else if ($tr instanceof Gerente314) {
                $cadenaHtml .= "<b>Gerente</b> <br>" .
                    Gerente314::toHtml($tr);
            }
            $cadenaHtml .= "Sueldo: " . $tr->calcularSueldo() . "<br><hr>";
        }
        return $cadenaHtml;
    }

    public function getCosteNominas(): float
    {
        $coste = 0;
        foreach ($this->trabajadores as $tr) {
            $coste += $tr->calcularSueldo();
        }
        return $coste;
    }
}

interface JSerializable
{
    public function toJSON(): string;
    public function toSerialize(): string;
}



//Pruebas

$ger = new Gerente314("Gerente", "uno", 28, 2000);
$ger->anyadirTelefono(545645646);
$ger->anyadirTelefono(8456564);
$emp = new Empleado314("Empleado", "Uno", 45, 40, 15);
$emp->anyadirTelefono(1316498456);
$emp->anyadirTelefono(887878787);

$empresa = new Empresa314();
$empresa->anyadirTrabajador($ger);
$empresa->anyadirTrabajador($emp);
echo $empresa->listarTrabajadoresHtml();
echo "<br>";
echo "Coste de las nóminas: ";
echo $empresa->getCosteNominas();
echo "<br><hr>";

echo "<b>Función to Json</b><br>";
echo $emp->toJSON();
echo "<br>";
echo $ger->toJSON();
echo "<br>";
echo "<b>Función to Serialize</b><br>";
echo $emp->toSerialize();
echo "<br>";
echo $ger->toSerialize();
echo "<br>";



