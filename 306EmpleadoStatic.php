<?php

/*
306EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala.
 Completa el siguiente método con una cadena HTML que muestre los datos de un 
 empleado dentro de un párrafo y todos los teléfonos mediante una lista ordenada:
    public static function toHtml(Empleado $emp): string
*/

declare(strict_types=1);

class Empleado
{
    private static float $sueldoTope;
    private array $numeros; //mejor inicializar en el constructor

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000
    ) {
        $this->numeros = []; //Inicializamos en el constructor, 
        //lo ponemos aquí porque no lo queremos pasar como constructor.
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

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    //Se pagan cuando el sueldo es superior a máximo
    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope ? true : false;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->numeros[] = $telefono;
    }

    //Muestra los teléfonos separados por comas
    public function listarTelefonos(): string
    {
        return implode(", ", $this->numeros);
    }

    //Elimina todos los teléfonos
    public function vaciarTelefonos(): void
    {
        $this->numeros = [];
    }

    public static function toHtml(Empleado $emp) : string
    {
        $cadenaHtml = "<p><b>Datos del empleado</b></p><p>";
        $cadenaHtml .= "Nombre: " . $emp->getNombre() . "</p>" .
            "<p>Apellidos: " . $emp->getApellidos() . "</p>" .
            "<p>Sueldo: " . $emp->getSueldo() . "€ </p>" .
            "Listado de teléfonos: " .
            "<ol>";

        foreach (explode(", " ,$emp->listarTelefonos()) as $telefono) {
            $cadenaHtml .= "<li>" . $telefono . "</li>";
        }
        $cadenaHtml .= "</ol>";

        return $cadenaHtml;
    }
}

$empleado = new Empleado("Lola", "Mento");

echo $empleado->setSueldo(8000);

$empleado->anyadirTelefono(46456465);
$empleado->anyadirTelefono(756998989);
$empleado->anyadirTelefono(76876976);
echo Empleado::toHtml($empleado);
