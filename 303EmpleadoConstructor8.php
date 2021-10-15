<?php

/* 
303EmpleadoConstructor8.php:
 Modifica la clase y utiliza la sintaxis de PHP 8 de promoción de las propiedades del constructor.
*/

declare(strict_types=1);

class Empleado
{
    private array $numeros;

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000
    ) {
        $this->numeros =[]; //Inicializamos en el constructor, 
        //lo ponemos aquí porque no lo queremos pasar como constructor.
    }

    public function setSueldo(float $sueldo)
    {
        $this->sueldo = $sueldo;
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
    //Se pagan cuando el sueldo es superior a 3333€
    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > 3333 ? true : false;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->numeros[] = $telefono;
    }
    //Muestra los teléfonos separados por comas
    public function listarTelefonos(): string
    {
        $cadena = "";
        foreach ($this->numeros as $valor) {
            $cadena .= $valor . ", ";
        }
        //quitar la coma del final
        $cadena = substr_replace($cadena, "", strlen($cadena) - 2);

        return $cadena;
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
echo $empleado-> debePagarImpuestos();
echo $empleado-> setSueldo(8000);
echo "<br>";
echo $empleado-> getSueldo();
echo "<br>";
echo "Debe pagar impuestos (1 sí): ";
echo $empleado-> debePagarImpuestos();
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

