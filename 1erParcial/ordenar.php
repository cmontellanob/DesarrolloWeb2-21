<?php
$n=$_POST['n'];
for ($i=0; $i < $n; $i++) { 
    $a[$i]=$_POST['numero'.$i];
}
asort($a);
echo "El arreglo ordenado es: <br>";
foreach($a as $valor){
    echo $valor."<br>";
}
?>