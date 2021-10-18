<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('conexion.php');
  $id=$_GET['id'];
  $sql="SELECT * FROM lugares where id=$id";
  $resultado = mysqli_query($conn, $sql);
  $fila = mysqli_fetch_array($resultado);
?>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id?>">
<label for="nobre">Nombre</label>
<input type="text" name="nombre" value="<?php echo $fila['nombre']?>"> <br>
<label for="ciudad">Ciudad</label>
<input type="number" name="ciudad" value="<?php echo $fila['idciudad']?>"> <br>
<label>Dirección</label>
<input type="text" name="direccion" value="<?php echo $fila['direccion']?>" > <br>
<label for="">Telefono</label>
<input type="number" name="telefono" value="<?php echo $fila['telefono']?>"> <br>
<label for="correo">Correo Electronico</label>
<input type="email" name="correo" value="<?php echo $fila['correoelectronico']?>">
<input type="submit" value="editar">
</form>
</body>
</html>
