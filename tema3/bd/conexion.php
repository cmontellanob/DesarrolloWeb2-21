<?php
$conn=new mysqli("localhost","root","","bd_vacunacion");
if($conn->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}
?>