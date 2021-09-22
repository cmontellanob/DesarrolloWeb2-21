<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Ciclo for</h3>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <div>numero <?php echo $i; ?></div>
    <?php }  ?>


    <h3>ciclo while</h3>
    <?php
    $j = 0;
    while ($j < 10) {
        echo "<div>numero " . $j . "</div>";
        $j++;
    }
    ?>

    <h3>Ciclo foreach</h3>
    <?php
    $arreglo = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


    foreach ($arreglo as $valor) { ?>
        <div>numero <?php echo $valor; ?></div>
    <?php }  ?>
   <hr>
    <h3>Ciclo foreach con indice</h3>
   <?php foreach ($arreglo as $indice=>$valor) { ?>
        <div>numero <?php echo $indice." ".$valor; ?></div>
    <?php }  ?>


</body>

</html>