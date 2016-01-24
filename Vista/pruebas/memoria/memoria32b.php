<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("memoria")){ 
        date_default_timezone_set("America/Bogota");
        $fechaIn= date("Y-m-d");
        //$inicio=microtime(true);
        //$_SESSION['tIni']=$inicio;
        $_SESSION['Ufecha']=$fechaIn;  
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="memoria.css" rel="stylesheet" type="text/css">
    <script language="Javascript" type="text/javascript" src="../../js/memoria.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Memoria</title>
</head>
<body onload="nobackbutton();">
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Prueba</a></li>
            <li><a href="login.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contmem" style="height:800px;">
    <div><br><br>
        <p>A continuación responde las siguientes preguntas de selección múltiple de acuerdo al ejercicio, recuerda que no debes ver la página anterior hasta que respondas cada una de las preguntas. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria32" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1) La figura que aparece en color rojo es: </h2><br>
                    <input type="radio" name="1" value="nube">
                    <label>Nube</label>

                    <input type="radio" name="1" value="flecha">
                    <label>Flecha</label>

                    <input type="radio" name="1" value="cruz">
                    <label>Cruz</label>

                    <input type="radio" name="1" value="cilindro">
                    <label>Cilindro</label><br><br>
                
                <h2 class="h33">2) La flecha que señala hacia abajo es de color: </h2><br>
                    <input type="radio" name="2" value="rojo">
                    <label>Rojo</label>

                    <input type="radio" name="2" value="verde">
                    <label>Verde</label>

                    <input type="radio" name="2" value="negro">
                    <label>Negro</label>

                    <input type="radio" name="2" value="morado">
                    <label>Morado</label><br><br>
                
                <h2 class="h33">3) La figura que aparece en color Morado es: </h2><br>
                    <input type="radio" name="3" value="cilindro">
                    <label>Cilindro</label>

                    <input type="radio" name="3" value="triangulo">
                    <label>Triángulo</label>

                    <input type="radio" name="3" value="hexagono">
                    <label>Hexágono</label>

                    <input type="radio" name="3" value="cubo">
                    <label>Cubo</label><br><br>
                
                <h2 class="h33">4) El color que observaste en la estrella de cinco puntas fue: </h2><br>
                    <input type="radio" name="4" value="blanca">
                    <label>Blanca</label>

                    <input type="radio" name="4" value="amarilla">
                    <label>Amarilla</label>

                    <input type="radio" name="4" value="roja">
                    <label>Roja</label>

                    <input type="radio" name="4" value="naranja">
                    <label>Naranja</label><br><br>
                
                <h2 class="h33">5) La figura de color azul es: </h2><br>
                    <input type="radio" name="5" value="cubo">
                    <label>Cubo</label>

                    <input type="radio" name="5" value="flecha">
                    <label>Flecha</label>

                    <input type="radio" name="5" value="estrella">
                    <label>Estrella</label>

                    <input type="radio" name="5" value="hexagono">
                    <label>Hexágono</label><br><br>
                
                <h2 class="h33">6) La figura que es de color gris es: </h2><br>
                    <input type="radio" name="6" value="rombo">
                    <label>Rombo</label>

                    <input type="radio" name="6" value="cilindro">
                    <label>Cilindro</label>

                    <input type="radio" name="6" value="triangulo">
                    <label>Triángulo</label>

                    <input type="radio" name="6" value="hexagono">
                    <label>Hexágono</label><br><br>
            </div>
            <button type="submit">Enviar</button>
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
<?php
  }
}
?>
