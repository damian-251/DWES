<?php

declare(strict_types=1);

include "312Trabajador.php";

class Empresa313
{
    private string $nombreEmpresa;
    private string $direccion;
    private array $trabajadores;

    public function __construct()
    {
        $this->trabajadores = [];
    }

    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getNombreEmpresa(): string
    {
        return $this->nombreEmpresa;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function anyadirTrabajador(Trabajador312 $t)
    {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml()
    {
        $cadenaHtml = "";
        foreach ($this->trabajadores as $tr) {
            if ($tr instanceof Empleado312) {
                $cadenaHtml .= "<b>Empleado</b> <br>" .
                    Empleado312::toHtml($tr);
            } else if ($tr instanceof Gerente312) {
                $cadenaHtml .= "<b>Gerente</b> <br>" .
                    Gerente312::toHtml($tr);
            }
            $cadenaHtml .= "Sueldo: " . $tr->calcularSueldo() . "<br><hr>";
        }
        return $cadenaHtml;
    }

    public function getCosteNominas(): float
    {
        $coste = 0;
        foreach ($this->trabajadores as $tr) {
            $coste += $tr->calcularSueldo();
        }
        return $coste;
    }
}

$ger = new Gerente312("Gerente", "uno", 28, 2000);
$ger->anyadirTelefono(545645646);
$ger->anyadirTelefono(8456564);
$emp = new Empleado312("Empleado", "Uno", 45, 40, 15);
$emp->anyadirTelefono(1316498456);
$emp->anyadirTelefono(887878787);

$empresa = new Empresa313();
$empresa->anyadirTrabajador($ger);
$empresa->anyadirTrabajador($emp);
echo $empresa->listarTrabajadoresHtml();
echo "<br>";
echo "Coste de las nóminas: ";
echo $empresa->getCosteNominas();
echo "<br>";
