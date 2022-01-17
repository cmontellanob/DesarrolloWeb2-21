<?php
$conn=new mysqli("localhost","root","","bd_biblioteca");
if($conn->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}
?>