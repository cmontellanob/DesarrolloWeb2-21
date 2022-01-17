<?php
$n=$_GET["n"];
$fibonacci1=0;
$fibonacci2=1;
?>
<table border="1">
<?php   
    echo "<tr><td>0</td><td>0</td></tr>";
for($i=1;$i<=$n;$i++){
    
    $fibonacci=$fibonacci1+$fibonacci2;
    echo "<tr><td>$i</td><td>$fibonacci</td></tr>";
    $fibonacci1=$fibonacci2;
    $fibonacci2=$fibonacci;
}
?>

</table>