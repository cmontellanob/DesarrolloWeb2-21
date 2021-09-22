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
    $a = 13;
    $b = 4;
    if ($a > $b) {
        echo "a es mayor que b";
    } else {
        echo "b es mayor que a";
    }
    echo "<hr>";
    $num = 4;
    switch ($num) {
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
        case 4:
            echo "cuatro";
            break;
        default:
            echo "es un numero mayor que 4";
    }
    ?>
</body>

</html>