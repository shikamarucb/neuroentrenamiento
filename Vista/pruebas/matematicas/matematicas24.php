<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="mate.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Plantilla</title>
    <style>
        #parrMAt{
            text-align:left;
        }
    </style>
</head>
<body>
<?php    
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
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
            <li><a href="login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contMat" style="height:750px;">
    <div id="contMat2">
        <h1>¡PRACTICA CON NÚMEROS! </h1><br><br>
        <p>A continuación encontrarás unos conjuntos de números. Realiza las operaciones aritméticas de acuerdo a los cinco enunciados y ubica la respuesta en la casilla correspondiente debajo de cada conjunto. Uno de los enunciados no corresponde a ninguno de las opciones de respuesta.

En uno de los conjuntos:</p><br><br>
        <p style="text-align:left; margin-left:10%;">A. La suma de todos sus elementos da como resultado 72. </p>
        <p style="text-align:left; margin-left:10%;">B. La suma de todos sus elementos da como resultado 68. </p>
        <p style="text-align:left; margin-left:10%;">C. La suma de todos los números pares es 182 y la suma de todos los números impares es 98. </p>
        <p style="text-align:left; margin-left:10%;">D. La suma de los números pares menos la suma de los números impares da como resultado 76. </p>
        <p style="text-align:left; margin-left:10%;">E. La suma de todos los números dividido 2 da como resultado 245. </p><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/matematicasControlador.php?value=matematicas24" method="POST" autocomplete="off">
            <table style="margin:0 auto;">
                <tr>
                    <td><img src="../imagenes/mat24A.png"><input type="text" style="width:8%;" name="1"></td>
                    <td><img src="../imagenes/mat24B.png"><input type="text" style="width:8%;" name="2"></td>
                </tr>
                <tr>
                    <td><img src="../imagenes/mat24C.png"><input type="text" style="width:8%;" name="3"></td>
                    <td><img src="../imagenes/mat24D.png"><input type="text" style="width:8%;" name="4"></td>
                </tr>
            </table><br><br>
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