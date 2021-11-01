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
    $n = $_GET['n'];
    ?>

    <form action="ordenar.php" method="post">
        <input type="hidden" name="n" value="<?php echo $n; ?>">
        <?php
        for ($i = 0; $i < $n; $i++) {
        ?>
            <input type="number" name="numero<?php echo $i; ?>"> <br>
        <?php
        }
        ?>
        <input type="submit" value="Ordenar">


    </form>


</body>

</html>