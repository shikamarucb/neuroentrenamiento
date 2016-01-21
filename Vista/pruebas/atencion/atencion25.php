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
        <p>A continuación encontrarás 12 cuadros, cada uno de ellos contiene una letra que te ayudará a formar una palabra, descubre la mayor cantidad de palabras ocultas y escríbelas en la parte inferior de la página. Será válido encontrar palabras en forma de u, n, - , L, escritas de derecha a izquierda, o de forma inversa la única condición de este ejercicio es que las letras se encuentren contiguas, inmediatas </p><br><br>
        <img src="../imagenes/atencion25.png">
        <form style="text-align:center;"  action="../../../Controlador/pruebas/atencionControlador.php?value=atencion25" method="POST" autocomplete="off">
            <table id="table1" >
                <tr>
                    <td><input type="text" class="inpt11" name="1"></td>
                    <td><input type="text" class="inpt11" name="2"></td>
                    <td><input type="text" class="inpt11" name="3"></td>
                    <td><input type="text" class="inpt11" name="4"></td>
                </tr>
                <tr>
                    <td><input type="text" class="inpt11" name="5"></td>
                    <td><input type="text" class="inpt11" name="6"></td>
                    <td><input type="text" class="inpt11" name="7"></td>
                    <td><input type="text" class="inpt11" name="8"></td>
                </tr><!--
                <tr>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                </tr>
                <tr>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                </tr>
                <tr>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                    <td><input type="text" class="inpt11"></td>
                </tr>-->
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