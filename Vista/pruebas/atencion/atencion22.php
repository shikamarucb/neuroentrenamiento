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
    
<div id="contAten" style="height:1080px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>A continuación encontrarás una serie de recuadros que manejan una secuencia base. Selecciona el último cuadro de la secuencia correspondiente.  </p><br><br>
        <img src="../imagenes/atencion22.png"><br><br>
        <form style="text-align:center; min-width:1024px;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion22" method="POST" autocomplete="off">
            <table id="table1" style="width:800px;">
                <tr>
                    <td><img src="../imagenes/a22A.png"><input type="radio" name="1" value="triangulo,circulo,flecha,cuadro"></td>
                    <td><img src="../imagenes/b22A.png"><input type="radio" name="1" value="triangulo,cuadro,flecha,circulo"></td>
                </tr>
                <tr>
                    <td><img src="../imagenes/c22A.png"></im><input type="radio" name="1" value="triangulo,cuadro,circulo,flecha"></td>
                    <td><img src="../imagenes/d22A.png"><input type="radio" name="1" value="cuadro,triangulo,circulo,flecha"></td>
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