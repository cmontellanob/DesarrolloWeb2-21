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
        if (isset($_COOKIE['contador']))
        {
            $contador = $_COOKIE['contador'];
            $contador++;
        }
        else
        {
            $contador = 1;
        }
        setcookie('contador', $contador, time()+3600);
        echo "Has visitado esta página $contador veces";
    ?>
        


</body>
</html>