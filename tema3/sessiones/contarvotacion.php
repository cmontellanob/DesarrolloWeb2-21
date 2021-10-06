<?php session_start();
$session_nombre=$_POST['lenguaje'];
if (isset($_SESSION[$session_nombre]))
{
     $_SESSION[$session_nombre]++; // lee  la cookie 
}
else
{
     $_SESSION[$session_nombre]=1; // crea la cookie
}   
echo "Has votado por $session_nombre que  hasta ahora tiene". $_SESSION[$session_nombre]." votos";
?>
<meta http-equiv="refresh" content="3; url=formvotacion.html">