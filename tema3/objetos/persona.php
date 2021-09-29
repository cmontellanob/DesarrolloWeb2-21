<?php 
class persona
{
    private $nombre;
    public $apellido;
    public $edad;
    function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }   
    function getNombre()
    {
        return $this->nombre;
    } 
    function mostrar()
    {
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "Edad: ".$this->edad."<br>";
    }
}
class estudiante extends persona
{
    public $carrera;
    function __construct($nombre, $apellido, $edad, $carrera)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->carrera = $carrera;
    }
    function mostrar()
    {
        parent::mostrar();
        echo "Carrera: ".$this->carrera."<br>";
    }
}

?>