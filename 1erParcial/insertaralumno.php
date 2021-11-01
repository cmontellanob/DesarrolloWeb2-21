<?php
include("clases.php");
session_start();
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cu=$_POST['cu'];
if (!isset($_SESSION['lista']))
{
    $_SESSION['lista'] = new ListaAlumnos();
}
$alumno=new Alumno($nombres,$apellidos,$cu);
$_SESSION['lista']->insertarAlumno($alumno);
?>
Se inserto con éxito
<meta http-equiv="refresh" content="3; url=pregunta2.html" />
