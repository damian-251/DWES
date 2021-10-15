<?php
/* Crea una clase Empleado con su nombre, apellidos y sueldo. 
    Encapsula las propiedades mediante getters/setters y añade métodos para:
    Obtener su nombre completo → getNombreCompleto(): string
    Que devuelva un booleano indicando si debe o no pagar impuestos 
    (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool
 */

declare(strict_types=1);

class Empleado
{
    const MAX = 3333;
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

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

    public function getNombreCompleto() : string {
        return $this->nombre . " " . $this->apellidos;
    }

    //Se pagan cuando el sueldo es superior a 3333€
    public function debePagarImpuestos() : bool {
        return $this->sueldo>self::MAX ? true : false ;
    }
}

