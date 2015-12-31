<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="atencion.css" rel="stylesheet" type="text/css">
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
    
<div id="contAten" style="height:1000px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        
        <p>Observa detenidamente las palabras que se encuentran dentro del círculo. Ten en cuenta la forma en que se escriben y las veces que se repiten, te servirá para contestar las preguntas que vienen a continuación. </p><br><br>
        
        <img src="../imagenes/atencion15.png"><br><br>
        
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion15" method="POST" autocomplete="off">
            <p>De acuerdo al texto responde las siguientes preguntas. </p><br><br>
            <div id="divA1">
                <label>1. ¿Qué palabra se repite dentro del círculo?</label><br>
                <input type="text" name="r1"><br><br>

                <label>2. ¿Cuántas veces se repite esta palabra?</label><br>
                <input type="number" name="r2"><br><br>

                <label>3. ¿Qué palabras se encuentran mal escritas, les faltan o les sobran letras?</label><br>
                <input type="text" name="r3"><br><br>

                <label>4. ¿Cuántas palabras finalizan en “ido” y están escritas correctamente?</label><br>
                <input type="number" name="r4"><br><br>
                
                <label>5. ¿Cuántas palabras finalizan en “esa”?</label><br>
                <input type="number" name="r5"><br><br>
            </div>
            
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