<?php include("persona.php");

$persona = new Persona("juan", "perez", "12");
echo $persona->getnombre(),"<hr>";
$persona->mostrar();
$estudiante = new estudiante("juan", "perez", "12","Ing. de Sistemas");
$estudiante->mostrar();

?>