<?php
$n = $_GET["n"];
$factorial = 1;
?>
<table>
    <tr>
        <th>Nro</th>
        <th>Factorial</th>
    </tr>
    <?php
    for ($i = 1; $i <= $n; $i++) {

        $factorial = $factorial * $i;
        echo "<tr><td>$i</td><td>$factorial</td></tr>";
    }

    ?>
</table>