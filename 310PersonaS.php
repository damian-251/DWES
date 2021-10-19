<?

/* 

310PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las clases Persona y Empleado,
 de forma similar a los realizados en HTML, pero sin que sean estáticos, de manera que obtenga los datos mediante $this.

    function public __toString(): string

 */

declare(strict_types=1);

class Persona310
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

    public function toHtml(): string
    {
        $cadenaHtml = "<p><b>Datos de la persona</b></p><p>";
        $cadenaHtml .= "Nombre: " . $this->getNombre() . "</p>" .
            "<p>Apellidos: " . $this->getApellidos() . "</p>" .
            "<p>Edad: " . $this->getEdad() . "</p>";

        return $cadenaHtml;
    }

    public function __toString(): string
    {
        return  "Nombre: " . $this->nombre . "<br> " . "Apellidos: " . $this->apellidos
            . "<br>" . "Edad: " . $this->edad;
    }
}

class Empleado310 extends Persona310
{
    private static $sueldoTope;
    private array $numeros;
    private float $sueldo;

    public function __construct(string $nombre, string $apellidos, int $edad, $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
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
        if ($this->sueldo > self::$sueldoTope && $this->edad > 21) {
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

    public function toHtml(): string
    {
        $cadenaHtml = parent::toHtml();

        $cadenaHtml .= "<p>Sueldo: " . $this->getSueldo() . "€ </p>" .
            "Listado de teléfonos: " .
            "<ol>";

        foreach (explode(", ", $this->listarTelefonos()) as $telefono) {
            $cadenaHtml .= "<li>" . $telefono . "</li>";
        }
        $cadenaHtml .= "</ol>";
        return $cadenaHtml;
    }

    public function __toString(): string
    {
        return parent::__toString() . "<br>"
            . "Sueldo: " . $this->sueldo . "<br> Teléfonos: " . $this->listarTelefonos();
    }
}

$emp = new Empleado310("Hola", "Adios", 25);
$emp->anyadirTelefono(54654654);
$emp->anyadirTelefono(44454545);

echo $emp->toHtml();

echo $emp->__toString();
