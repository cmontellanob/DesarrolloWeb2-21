<?php
include("clases.php");
session_start();
if (isset($_SESSION['lista']))
{
    $_SESSION['lista']->mostrarlista();
}
?>
<meta http-equiv="refresh" content="3; url=pregunta2.html" />
