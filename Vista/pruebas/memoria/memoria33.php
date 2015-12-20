<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="memoria.css" rel="stylesheet" type="text/css">

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
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../../contact.html">Contacto</a></li>
            <li><a href="../../register.html">Registrarse</a></li>
            <li><a href="../../login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contmem">
    <div><br><br>
        <p>A continuación se presentan una serie de números. Memorízalos, según su orden y columna. Una vez que te sientas preparado (a) pasa a la siguiente hoja. </p><br><br><br>
        <div id="formA1">
            <table id="tableA1"> 
                <tr>
                    <th>Columna A</th>
                    <th>Columna B</th>
                </tr>

                <tr>
                    <td class="tdCol1">263</td>
                    <td class="tdCol1">65</td>
                </tr>

                <tr>
                    <td class="tdCol1">99</td>
                    <td class="tdCol1">001</td>
                </tr>

                <tr>
                    <td class="tdCol1">789</td>
                    <td class="tdCol1">33</td>
                </tr>

                 <tr>
                    <td class="tdCol1">46</td>
                    <td class="tdCol1">765</td>
                </tr>

                <tr>
                    <td class="tdCol1">222</td>
                    <td class="tdCol1">908</td>
                </tr>
            </table><br><br><br><br>
        </div>
        <a href="memoria33b.php">Siguiente</a>
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
