<?php
class ListaAlumnos
{
    public $lista = array();
    public $cantidad = 0;
    public function insertaralumno($alumno)
    {
        $this->lista[$this->cantidad] = $alumno;
        $this->cantidad++;
    }
    public function mostrarlista()
    {
        for ($i = 0; $i < $this->cantidad; $i++) {
            echo $this->lista[$i]->mostrar();
        }
    }
    public function eliminar()
    {
        if ($this->cantidad > 0) {
            $this->cantidad--;
        }
    }
}
class Alumno
{
    public $cu;
    public $nombres;
    public $apellidos;

    public function __construct($cu, $nombres, $apellidos)
    {
        $this->cu = $cu;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
    public function mostrar()
    {
        echo "Cu: " . $this->cu . "<br>";
        echo "Nombres: " . $this->nombres . "<br>";
        echo "Apellidos: " . $this->apellidos . "<br>";
        echo "<hr>";
    }
}
