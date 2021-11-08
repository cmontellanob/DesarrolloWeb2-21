<?php
$alto= $_GET['alto'];
$ancho= $_GET['ancho'];
// Crear una imagen de 200 x 200
$lienzo = imagecreatetruecolor($alto, $ancho);

// Asignar colores
$verde = imagecolorallocate($lienzo, 132, 135, 28);

// Dibujar tres rectángulos, cada uno con su color
imagerectangle($lienzo,1, 1, $alto, $ancho, $verde);

// Imprimir y liberar memoria
header('Content-Type: image/jpeg');

imagejpeg($lienzo);
imagedestroy($lienzo);
?>