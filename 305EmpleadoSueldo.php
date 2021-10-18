<?php

/* 
305EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. 
Cambia la constante por una variable estática sueldoTope, de manera que
 mediante getter/setter puedas modificar su valor.
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
}

$empleado = new Empleado("Lola", "Mento");

echo $empleado->getNombreCompleto();
echo "<br>";
$empleado->anyadirTelefono(12345788);
$empleado->anyadirTelefono(789545654);
$cadenaTelefonos = $empleado->listarTelefonos();
echo "Cadena teléfonos: ";
echo $cadenaTelefonos;
echo "<br>";
echo $empleado->getSueldo();
echo "<br>";
echo "Debe pagar impuestos: (1 sí): ";
echo $empleado->debePagarImpuestos();
echo $empleado->setSueldo(8000);
echo "<br>";
echo $empleado->getSueldo();
echo "<br>";
echo "Debe pagar impuestos (1 sí): ";
echo $empleado->debePagarImpuestos();
echo "<br>";
$empleado->vaciarTelefonos();
$cadenaTelefonos = $empleado->listarTelefonos();
echo "Vaciamos los teléfonos";
echo "<br>";
echo "Listado teléfonos: ";
echo $empleado->listarTelefonos();
echo "<br>" . "Se añaden nuevos teléfonos: ";
$empleado->anyadirTelefono(46456465);
$empleado->anyadirTelefono(756998989);
$empleado->anyadirTelefono(76876976);
echo $empleado->listarTelefonos();
