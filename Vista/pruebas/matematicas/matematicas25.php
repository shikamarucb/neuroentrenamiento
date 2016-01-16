<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="mate.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Plantilla</title>
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
    
<div id="contMat" style="height:540px;">
    <div id="contMat2">
        <h1>¡PRACTICA CON NÚMEROS! </h1><br><br>
        <p>A continuación se presentan dos columnas, una con operaciones aritméticas (izquierda) y otra con sus soluciones (derecha). Coloca el número del enunciado correspondiente al resultado.</p><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/matematicasControlador.php?value=matematicas25" method="POST" autocomplete="off">
            <div class="contPr2"><pre>1) 6-3                                            16  <input type="number" name="1"></pre></div><br>
            <div class="contPr2"><pre>2) 12-6                                          3    <input type="number" name="2"></pre></div><br>
            <div class="contPr2"><pre>3) 34/2                                          14   <input type="number" name="3"></pre></div><br>
            <div class="contPr2"><pre>4) (20-11)+5                                  6    <input type="number" name="4"></pre></div><br>
            <div class="contPr2"><pre>5) (16/4)x(16/4)                             4    <input type="number" name="5"></pre></div><br>
            <div class="contPr2"><pre>6) (2x1)x2                                      17  <input type="number" name="6"></pre></div><br>
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