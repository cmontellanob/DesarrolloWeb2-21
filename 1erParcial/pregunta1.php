<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Parcial</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div id="contenido">
        <div id="encabezado">
            <div id="logo"><img src="images/usfx.png" alt=""></div>
            <div id="universidad">UNIVERSIDAD DE SAN FRANCISCO XAVIER
                <br>
                <span id="facultad">Facutaltad de Tecnologia</span><span id="sucre">Sucr<span
                        style="color: yellow;">e-Bol</span><span style="color: rgb(8, 44, 8);">ivia</span>
            </div>
            <div id="sistemas">Carrera Ing de Sistemas -Ing en ciencia s de la Computación <span
                    style="float: right;">Semestre 2-2021</span></div>
        </div>
        <div id="izquierda">

            <ul class="menu">
                <li><a href="pregunta1.php">Pregunta 1</a></li>
                <li><a href="pregunta2.html">Pregunta 2</a></li>

            </ul>

        </div>
        <div id="centro">
            Primer Examen de Programación Internet intranet
               

        </div>
        <div id="derecha">
            <ul class="menu">
                <li><a href="pregunta3.html">Pregunta 3</a></li>
                <li><a href="pregunta4.html">Pregunta 4</a></li>

            </ul>
        </div>
        <div id="pie">
                    <div>Alumno: </div>
                    <div>CU: </div>
                    <div>Numero de visitas: <?php 
                    if (isset($_COOKIE['visitas'])){
                        $visitas = $_COOKIE['visitas'];
                        $visitas++;
                    }
                    else{
                        $visitas = 1;
                    }
                        setcookie('visitas', $visitas, time()+3600);
                        echo $visitas;
                    ?> </div>
                    

                   
        </div>

            

    </div>

</body>

</html>