<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Arreglo 1 de numeros</h3>
    <?php

    $arreglo1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($arreglo1 as $valor) {
        echo $valor . "<br>";
    }
    for ($i=0;$i<count($arreglo1);$i++) {
        echo $arreglo1[$i] . "<br>";
    }
    ?>
    <h3>Arreglo 2 de varios tipos</h3>
    <?php

    $arreglo2 = array(1, "Juan", 3.14, true, -5, "Otra cadena");
    foreach ($arreglo2 as $valor) {
        echo $valor . "<br>";
    }
    ?>
    <h3>Arreglo Cualificados de varios tipos, asociativo</h3>
    <?php

    $arreglo3 = ["nombre"=>"juan","Edad"=>15,"Sexo"=>"Masculino"];
    foreach ($arreglo3 as $indice=>$valor) {
        echo $indice.":". $valor . "<br>";
    }
    ?>
    

    <h3>Arreglo asociativo</h3>
    <?php
    $arreglo4=[];
    $arreglo4[]=5;
    $arreglo4[]=15;
    $arreglo4[]=25;
    $arreglo4[]=35;
    foreach ($arreglo4 as $indice=>$valor) {
        echo $indice.":". $valor . "<br>";
    }

    

?>
<h3>Arreglo de arreglos</h3>
<?php
$arreglo5=array();
$arreglo5[0][]=1;
$arreglo5[0][]=1;
$arreglo5[0][]=1;
$arreglo5[1][]=2;
$arreglo5[1][]=2;
$arreglo5[1][]=2;
$arreglo5[2][]=3;
$arreglo5[2][]=3;
$arreglo5[2][]=3;

foreach ($arreglo5 as $fila) {
    foreach ($fila as $valor) {
        echo $valor . " ";
    }
   echo     "<br>";
}

?>


</body>

</html>