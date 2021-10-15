<?php

declare(strict_types=1);
/* 
    Copia la clase del ejercicio anterior y modifícala. Añade una propiedad privada que
     almacene un array de números de telefonos. Añade los siguientes métodos:

    public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
    public function listarTelefonos(): string → Muestra los teléfonos separados por comas
    public function vaciarTelefonos(): void → Elimina todos los teléfonos

*/

class Empleado
{
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array $numeros;

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellidos)
    {
        $this->apellidos = $apellidos;
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
