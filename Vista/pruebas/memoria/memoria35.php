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
        <p>A continuación se presentan dos columnas con una serie palabras, memorízalas en el orden en que se encuentran. Luego pasa a la siguiente página. </p><br><br><br>
        <div id="formA1">
            <table id="tableA1"> 
                <tr>
                    <th>Columna A</th>
                    <th>Columna B</th>
                </tr>

                <tr>
                    <td class="tdCol1">Cama</td>
                    <td class="tdCol1">Mesa</td>
                </tr>

                <tr>
                    <td class="tdCol1">Televisor</td>
                    <td class="tdCol1">Sillon</td>
                </tr>

                <tr>
                    <td class="tdCol1">Camarote</td>
                    <td class="tdCol1">Nevera</td>
                </tr>

                 <tr>
                    <td class="tdCol1">Microondas</td>
                    <td class="tdCol1">Ventilador</td>
                </tr>

                <tr>
                    <td class="tdCol1">Closet</td>
                    <td class="tdCol1">Radio</td>
                </tr>
                
                <tr>
                    <td class="tdCol1">Lavadora</td>
                    <td class="tdCol1">Sofá</td>
                </tr>
                
                <tr>
                    <td class="tdCol1">Silla</td>
                    <td class="tdCol1">Estúfa</td>
                </tr>
            </table><br><br><br><br>
        </div>
        <a href="memoria35b.php">Siguiente</a>
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
