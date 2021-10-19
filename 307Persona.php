<?php

/*  Copia la clase del ejercicio anterior en 307Empleado.php y modifícala.
Crea una clase Persona que sea padre de Empleado, de manera que Persona
 contenga el nombre y los apellidos, y en Empleado quede el salario y los teléfonos. */


declare(strict_types=1);

class Persona
{
    public function __construct(
        protected string $nombre,
        protected string $apellidos,
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

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    /* He quitado el parámetro de entrada y que sea estática ya que manteniéndolo
     no era posible usar la función en la clase Empleado307 ya que pide un parámetro de la clase Persona 
     y no es posible añadirle los atributos extra de la clase empleado */
    public function toHtml(): string
    {
        $cadenaHtml = "<p><b>Datos de la persona</b></p><p>";
        $cadenaHtml .= "Nombre: " . $this->getNombre() . "</p>" .
            "<p>Apellidos: " . $this->getApellidos() . "</p>";

        return $cadenaHtml;
    }
}
/*
$per = new Persona("Lola", "Mento");
echo $per->toHtml($per); */

