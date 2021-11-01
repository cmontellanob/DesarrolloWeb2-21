<?php
include("clases.php");
session_start();
if (isset($_SESSION['lista']))
{
    $_SESSION['lista']->eliminar();
}
?>
Se elimino con éxito
<meta http-equiv="refresh" content="3; url=pregunta2.html" />
