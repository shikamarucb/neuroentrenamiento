<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("memoria", "25")){ 
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
            <li><a href="../menu/prueba.php">Prueba</a></li>
            <li><a href="../menu/miGrafica.php">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesión</a></li>
        </ul>
    </div>
</nav>
    
<div id="contmem" style="height:900px;">
    <div><br><br>
        <p>Responde las siguientes preguntas de acuerdo a las imágenes vistas. Recuerda no observar la página anterior: </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria25" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1) ¿De qué color era el triángulo? </h2><br>
                    <input type="radio" name="1" value="amarillo">
                    <label>Amarillo</label><br>

                    <input type="radio" name="1" value="azul">
                    <label>Azul</label><br>

                    <input type="radio" name="1" value="rojo">
                    <label>Rojo</label><br>

                    <input type="radio" name="1" value="naranja">
                    <label>Naranja</label><br><br>
                
                <h2 class="h33">2) ¿Cuántas puntas tenía la estrella? </h2><br>
                    <input type="radio" name="2" value="cinco">
                    <label>Cinco puntas</label><br>

                    <input type="radio" name="2" value="dos">
                    <label>Dos puntas</label><br>

                    <input type="radio" name="2" value="una">
                    <label>Una punta</label><br>

                    <input type="radio" name="2" value="seis">
                    <label>Seis puntas</label><br><br>
                
                <h2 class="h33">3) ¿Qué figura se forma dentro del círculo? </h2><br>
                    <input type="radio" name="3" value="raya">
                    <label>Una raya</label><br>

                    <input type="radio" name="3" value="cruz">
                    <label>Una cruz</label><br>

                    <input type="radio" name="3" value="onda">
                    <label>Una onda</label><br>

                    <input type="radio" name="3" value="rectangulo">
                    <label>Un rectángulo</label><br><br>
                
                <h2 class="h33">4) ¿Hacia qué dirección apunta la flecha? </h2><br>
                    <input type="radio" name="4" value="arriba">
                    <label>Arriba</label><br>

                    <input type="radio" name="4" value="abajo">
                    <label>Abajo</label><br>

                    <input type="radio" name="4" value="izquierda">
                    <label>Izquierda</label><br>

                    <input type="radio" name="4" value="derecha">
                    <label>Derecha</label><br><br>
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
            <p>Centro de investigación tecnológica</p>
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
