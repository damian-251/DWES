<?php

/* 
 Copia la clase del ejercicio anterior y modifícala. Elimina los setters de nombre y apellidos,
  de manera que dichos datos se asignan mediante el constructor (utiliza la sintaxis de PHP7).
   Si el constructor recibe un tercer parámetro, será el sueldo del Empleado. 
   Si no, se le asignará 1000€ como sueldo inicial.
*/
declare (strict_types=1);

class Empleado
{
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array  $numeros; //Mejor inicializar en el constructor

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
        $this->numeros = []; //Inicializamos el array de teléfonos
        /* En el constructor normalmente se puede poner una clave primaria o
        un valor que no varíe */
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
