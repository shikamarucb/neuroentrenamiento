<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="atencion.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Atención</title>
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
            <li><a href="index.html">Prueba</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="login.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten" style="height:650px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Observa la siguiente imagen. Identifica su color, forma y enumera cuantas veces se repiten dentro de la imagen. </p><br><br>
        <img src="../imagenes/atencion41.png">
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion41" method="POST" autocomplete="off">
            <div>
                <img src="../imagenes/a41A.png"><input type="number" style="width:8%;" name="1">
                <img src="../imagenes/b41A.png"><input type="number" style="width:8%;" name="2">
                <img src="../imagenes/c41A.png"><input type="number" style="width:8%;" name="3">
                <img src="../imagenes/d41A.png"><input type="number" style="width:8%;" name="4">
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