<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo strlen("12345"), "<br>";
    $palabras = explode(" ", "Esto es una prueba");
    for ($i = 0;$i<count($palabras); $i++) {
        echo $palabras[$i] . "<br>";
    }

    $nuevacadena = implode("-", $palabras);
    echo $nuevacadena;
    echo str_word_count("Esto es una prueba"), "<br>";

    $resultado = sprintf("8x5 = %d <br>", 8 * 5);
    echo $resultado, "<br>";
    echo substr("Devuelve una subcadena de otra", 9, 3), "<br><br>";
    if (chop("Cadena \n\n ") == "Cadena")
        echo "Iguales<br><br>";
    echo strpos("Busca la palabra dentro de la frase", "palabra"), "<br><br>";

    echo str_replace("verde", "rojo", "Un pez de color verde, como verde es la hierba."), "<br>";
    echo strtoupper("Hola mundo"), "<br>";
    echo strtolower("HOLA MUNDO"), "<br>";
    ?>

  
</body>

</html>