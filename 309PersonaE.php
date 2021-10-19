<?

/* 309PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando tenga más de 21 años.
Modifica todo el código necesario para mostrar y/o editar la edad cuando sea necesario. */


declare(strict_types=1);

class Persona309
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

    public static function toHtml(Persona309 $p): string
    {
        $cadenaHtml = "<p><b>Datos de la persona</b></p><p>";
        $cadenaHtml .= "Nombre: " . $p->getNombre() . "</p>" .
            "<p>Apellidos: " . $p->getApellidos() . "</p>" .
            "<p>Edad: " . $p->getEdad() . "</p>";

        return $cadenaHtml;
    }
}

class Empleado309 extends Persona309
{
    private static $sueldoTope;
    private array $numeros;

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad,
        private float $sueldo = 1000
    ) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->numeros = [];
    }

    /* public function __construct(string $nombre, string $apellidos, int $edad, $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
        $this->numeros = []; 
    } */

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

    public static function toHtml(Persona309 $p): string
    {
        $cadenaHtml = parent::toHtml($p);

        if ($p instanceof Empleado309) {
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

$emp = new Empleado309("Hola", "Adios", 25);

echo $emp->debePagarImpuestos();

echo Empleado309::toHtml($emp);
