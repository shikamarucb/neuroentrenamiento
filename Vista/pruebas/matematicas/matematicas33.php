<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="mate.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Matemáticas</title>
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
            <li><a href="index.html">Prueba</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="login.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contMat" style="height:640px;">
    <div id="contMat2">
        <h1>¡PRACTICA CON NÚMEROS! </h1><br><br>
        <p>A continuación se presentan una serie de ejercicios matemáticos que debes resolver. Cuando en un ejercicio encuentres paréntesis, primero desarrolla las operaciones que se encuentren dentro de ellos. </p><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/matematicasControlador.php?value=matematicas33" method="POST" autocomplete="off">
            <div class="contPr3"><pre>1) (56 + 34) – <input type="number" name="1"> = 60    </pre></div><br>
            <div class="contPr3"><pre>2) (<input type="number" name="2"> - 78) ÷ 3 = 4</pre></div><br>
            <div class="contPr3"><pre>3) (68 ÷ <input type="number" name="3">) + 5 = 39</pre></div><br>
            <div class="contPr3"><pre>4) (22 + <input type="number" name="4">) + 8 = 50</pre></div><br>
            <div class="contPr3"><pre>5) (<input type="number" name="5"> + 32) – 30 = 82</pre></div><br>
            <div class="contPr3"><pre>6) (40 ÷ <input type="number" name="6">) + 12 = 22</pre></div><br>
            <div class="contPr3"><pre>7) (83 – 33) + <input type="number" name="7"> = 70</pre></div><br>
            <div class="contPr3"><pre>8) 17 + (44 - <input type="number" name="8">) = 21</pre></div><br>
            <div class="contPr3"><pre>9) (<input type="number" name="9"> + 54) ÷ 2 = 28</pre></div><br>
            <div class="contPr3"><pre>10) (34 + 16) - <input type="number" name="10"> = 25</pre></div><br>
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