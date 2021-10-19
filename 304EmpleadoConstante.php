<?php 

/* 
Copia la clase del ejercicio anterior y modifícala. Añade una constante SUELDO_TOPE 
con el valor del sueldo que debe pagar impuestos, y modifica el código para utilizar la constante.
*/

declare(strict_types=1);

class Empleado304
{
    private const SUELDO_TOPE = 3333;
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
        return $this->sueldo > $this->SUELDO_TOPE ? true : false; //this porque no es estático
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

$Empleado304 = new Empleado304("Lola", "Mento");

echo $Empleado304->getNombreCompleto();
echo "<br>";
$Empleado304->anyadirTelefono(12345788);
$Empleado304->anyadirTelefono(789545654);
$cadenaTelefonos = $Empleado304->listarTelefonos();
echo "Cadena teléfonos: ";
echo $cadenaTelefonos;
echo "<br>";
echo $Empleado304->getSueldo();
echo "<br>";
echo "Debe pagar impuestos: (1 sí): ";
echo $Empleado304-> debePagarImpuestos();
echo $Empleado304-> setSueldo(8000);
echo "<br>";
echo $Empleado304-> getSueldo();
echo "<br>";
echo "Debe pagar impuestos (1 sí): ";
echo $Empleado304-> debePagarImpuestos();
echo "<br>";
$Empleado304->vaciarTelefonos();
$cadenaTelefonos = $Empleado304->listarTelefonos();
echo "Vaciamos los teléfonos";
echo "<br>";
echo "Listado teléfonos: ";
echo $Empleado304->listarTelefonos();
echo "<br>" . "Se añaden nuevos teléfonos: ";
$Empleado304->anyadirTelefono(46456465);
$Empleado304->anyadirTelefono(756998989);
$Empleado304->anyadirTelefono(76876976);
echo $Empleado304->listarTelefonos();

