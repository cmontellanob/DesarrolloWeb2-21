function pregunta2() {
    document.getElementById("titulo").value = "“Pregunta 2 Series en Javascrip";
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            document.getElementById("boton").addEventListener("click", calcularjs);
        }
    };
    xhttp.open("GET", "tabla.html", true);
    xhttp.send();
}
function calcularjs() {
    var n = document.getElementById("numero").value;
    if (document.getElementById("operacionfactorial").checked) {
        document.getElementById('mensaje').innerHTML = factorial(n);
    }
    if (document.getElementById("operacionfibonaci").checked) {
        document.getElementById('mensaje').innerHTML = fibonaci(n);
    }
}
function factorial(numero) {
    var tabla = '<table border=1>"; <tr><th>Número</th><th>Factorial</th></tr>';

    var resultado = 1;
    for (var i = 1; i <= numero; i++) {
        resultado = resultado * i;
        tabla += "<tr><td>" + i + "</td><td>" + resultado + "</td></tr>";
    }
    tabla += "</table>";
    return tabla;
}
function fibonaci(numero) {
    var resultado = 0;
    var anterior = 0;
    var actual = 1;
    var tabla = '<table border=1>"; <tr><th>Número</th><th>Fibonaci</th></tr>';
    for (var i = 0; i < numero; i++) {
        resultado = anterior + actual;
        tabla += "<tr><td>" + i + "</td><td>" + resultado + "</td></tr>";
        anterior = actual;
        actual = resultado;
    }
    tabla += "</table>";
    return tabla;
}
function pregunta3() {
    document.getElementById("titulo").value = "“Pregunta 3 Series en Ajax";
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            document.getElementById("boton").addEventListener("click", calcularajax);
        }
    };
    xhttp.open("GET", "tabla.html", true);
    xhttp.send();
}

function calcularajax() {
    var url = "";
    var n = document.getElementById("numero").value;
    if (document.getElementById("operacionfactorial").checked) {
        url = "factorial.php?n=" + n;
    }
    if (document.getElementById("operacionfibonaci").checked) {
        url = "fibonaci.php?n=" + n;
    }

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mensaje").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}
function pregunta4() {
    document.getElementById("titulo").value = "“Pregunta 4 Listado de libros";
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "read.php", true);
    xhttp.send();
}
function ordenar(campo) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "read.php?orden="+campo, true);
    xhttp.send();
}
function eliminar(id) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "delete.php?id="+id, true);
    xhttp.send();
}
function pregunta5() {
    document.getElementById("titulo").value = "Pregunta 5 Multiplicaciones";
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            
        }
    };
    xhttp.open("GET", "multiplicaciones.html", true);
    xhttp.send();
}
function  crearcuadros()
{
    n=document.getElementById("numero_cuadros").value;
    html="";
    for (var i = 0; i < n; i++) {
        html+="<input type='number' id='c"+i+"'><br>";
    }
    html+="<button onclick='multiplicar()'>mutiplicar</button>";
    document.getElementById("contenido").innerHTML=html;
}
function multiplicar()
{
  
    var resultado=1;
    for (var i = 0; i < n; i++) {
        resultado=resultado*document.getElementById("c"+i).value;
    }
    document.getElementById("mensaje").innerHTML="<h1>"+resultado+"</h1>";
}