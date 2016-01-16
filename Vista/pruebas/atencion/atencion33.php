<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="atencion.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Plantilla</title>
</head>
<body>
<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    $fechaIn= date("Y-m-d");
    $inicio=microtime(true);
    $_SESSION['tIni']=$inicio;
?>
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="register.html">Registrarse</a></li>
            <li><a href="../../login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten" style="height:800px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Observa con atención la siguiente fotografía. En los espacios en blanco, ubica el número de recorte que corresponde de acuerdo a la imagen. </p><br><br>
        <img src="../imagenes/a33A.png">
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion33" method="POST" autocomplete="off">
            <div>
                <img src="../imagenes/b33A.png"><input type="number" style="width:8%;" name="1">
                <img src="../imagenes/c33A.png"><input type="number" style="width:8%;" name="2">
                <img src="../imagenes/d33A.png"><input type="number" style="width:8%;" name="3">
                <img src="../imagenes/e33A.png"><input type="number" style="width:8%;" name="4">
            </div><br>
            <div>
                <img src="../imagenes/f33A.png"><input type="number" style="width:8%;" name="5">
                <img src="../imagenes/g33A.png"><input type="number" style="width:8%;" name="6">
                <img src="../imagenes/h33A.png"><input type="number" style="width:8%;" name="7">
                <img src="../imagenes/i33A.png"><input type="number" style="width:8%;" name="8">
            </div><br>
            <div>
                <img src="../imagenes/j33A.png"><input type="number" style="width:8%;" name="9">
                <img src="../imagenes/k33A.png"><input type="number" style="width:8%;" name="10">
            </div><br><br><br>
            <button id="subBA" type="submit">Enviar</button>
        </form>
        
    </div>
</div>
<footer>
    <div id="footerP">
        <br><br><div>
            <p>Universidad de Cundinamarca &copy;</p>
        </div>
        <div>
            <p>Centro de investigacion tecnológica</p>
        </div>
        <div>
            <p>2016</p>
        </div>
    </div>
</footer>

</body>
</html>