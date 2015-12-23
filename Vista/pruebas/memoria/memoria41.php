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
        <p>A continuación se presenta una serie de palabras en columnas. Memoriza el orden de la secuencia y luego pasa a la siguiente página. </p><br><br><br>
        <div id="formA1">
            <table id="tableA1"> 
                <tr>
                    <th>Columna A</th>
                    <th>Columna B</th>
                    <th>Columna C</th>
                </tr>

                <tr>
                    <td class="tdCol1">Cabello</td>
                    <td class="tdCol1">Soldado</td>
                    <td class="tdCol1">León</td>
                </tr>

                <tr>
                    <td class="tdCol1">Perro</td>
                    <td class="tdCol1">Gato</td>
                    <td class="tdCol1">Oveja</td>
                </tr>

                <tr>
                    <td class="tdCol1">Mujer</td>
                    <td class="tdCol1">Moto</td>
                    <td class="tdCol1">Sofá</td>
                </tr>

                 <tr>
                    <td class="tdCol1"></td>
                     <td class="tdCol1">Manzana</td>
                    <td class="tdCol1"></td>
                </tr>
            </table><br><br><br><br>
        </div>
        <a href="memoria41b.php">Siguiente</a>
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