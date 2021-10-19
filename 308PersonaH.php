<?php
/* 
308PersonaH.php: Copia las clases del ejercicio anterior y modifícalas.
Crea en Persona el método estático toHtml(Persona $p).
Modifica en Empleado el mismo método toHtml(), pero cambia la firma para que reciba una Persona como parámetro
*/

declare(strict_types=1);

class Persona308
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

    public static function toHtml(Persona308 $p): string
    {
        $cadenaHtml = "<p><b>Datos de la persona</b></p><p>";
        $cadenaHtml .= "Nombre: " . $p->getNombre() . "</p>" .
            "<p>Apellidos: " . $p->getApellidos() . "</p>";

        return $cadenaHtml;
    }
}

class Empleado308 extends Persona308
{
    private static $sueldoTope;
    private array $numeros;
    private float $sueldo;

    public function __construct(string $nombre, string $apellidos, $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos);
        $this->sueldo = $sueldo;
        $this->numeros = [];
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

    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope ? true : false;
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

    public static function toHtml(Persona308 $p): string
    {
        $cadenaHtml = parent::toHtml($p);

        if ($p instanceof Empleado308) {
            $cadenaHtml .= "<p>Sueldo: " . $p->getSueldo() . "€ </p>" .
                "Listado de teléfonos: " .
                "<ol>";

            foreach (explode(", ", $p->listarTelefonos()) as $telefono) {
                $cadenaHtml .= "<li>" . $telefono . "</li>";
            }
            $cadenaHtml .= "</ol>";
        }
        return $cadenaHtml;
    }
}

$p = new Empleado308("Elena", "Nito");
$p->anyadirTelefono(654654654);
$p->anyadirTelefono(894635467);
echo Empleado308::toHtml($p);
