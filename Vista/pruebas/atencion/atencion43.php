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
    
<div id="contAten" style="height:800px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>A continuación te presentamos una serie de cuadros de color verde y amarillo, los cuales forman horizontalmente una secuencia. Sigue la serie y selecciona en la parte inferior del ejercicio el color correcto que completa la serie. </p><br><br>
        <img src="../imagenes/atencion43.png">
        <form style="text-align:center; min-width:1024px;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion43" method="POST" autocomplete="off">
            <div class="divA2">
                <p>Primera Serie:</p>
                <img src="../imagenes/a43A.png"><input type="radio" name="1" value="verde">
                <img src="../imagenes/b43A.png"><input type="radio" name="1" value="amarillo">
            </div>
            
            <div class="divA2">
                <p>Segunda Serie:</p>
                <img src="../imagenes/a43A.png"><input type="radio" name="2" value="verde">
                <img src="../imagenes/b43A.png"><input type="radio" name="2" value="amarillo">
            </div><br><br><br>
            
            <div class="divA2">
                <p>Tercera Serie:</p>
                <img src="../imagenes/a43A.png"><input type="radio" name="3" value="verde">
                <img src="../imagenes/b43A.png"><input type="radio" name="3" value="amarillo">
            </div>
            
            <div class="divA2">
                <p>Cuarta Serie:</p>
                <img src="../imagenes/a43A.png"><input type="radio" name="4" value="verde">
                <img src="../imagenes/b43A.png"><input type="radio" name="4" value="amarillo">
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