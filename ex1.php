<?php 

// Creación de la clase
class Empleado{
    public $nombre;
    public $sueldo;

    // Método constructor
    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    // Método que imprime los datos 
    public function imprime()
    {
        if($this->sueldo >= 3000)   return "Mi nombre es: {$this->nombre} y debe pagar impuestos";
        else  return "Mi nombre es: {$this->nombre} y está exento de pagar impuestos";
    }
}

$empleadoLuis = new Empleado('Luis', 2500);
echo $empleadoLuis->imprime();

?>