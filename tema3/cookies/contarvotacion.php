<?php
$cookie_nombre=$_POST['lenguaje'];
if (isset($_COOKIE[$cookie_nombre]))
{
    $contador = $_COOKIE[$cookie_nombre]; // lee  la cookie 
    $contador++;
}
else
{
    $contador = 1;
}
setcookie($cookie_nombre, $contador, time()+3600); //crea la cookie con el nombre, el valor y la fecha de expiración
echo "Has votado por $cookie_nombre que  hasta ahora tiene $contador votos";
?>
<meta http-equiv="refresh" content="3; url=formvotacion.html">