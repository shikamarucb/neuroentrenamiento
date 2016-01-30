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
            <li><a href="../menu/prueba.php">Prueba</a></li>
            <li><a href="../menu/miGrafica.php">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesión</a></li>
        </ul>
    </div>
</nav>
    
<div id="contmem">
    <div><br><br>
        <p>En las siguientes casillas coloca el número correspondiente a la ubicación anterior. Recuerda no observar la página anterior. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria34" method="POST" autocomplete="off">
            <div>
                <input type="number" name="1" class="inpA1" style="float: left; margin-left:15%;">
                <input type="number" name="2" class="inpA1">
                <input type="number" name="3" class="inpA1" style="float: right; margin-right:15%;">
            </div><br>
            <div style="width:50%; float:left;">
                <input type="number" name="4" class="inpA2" style="float:left;">
                <input type="number" name="5" class="inpA2" style="float:right; margin-right:20%;" >
            </div>
            <div style="width:50%; float:right;">
                <input type="number" name="6" class="inpA2" style="float:left; margin-left:20%;">
                <input type="number" name="7" class="inpA2" style="float:right;">
            </div><br><br><br><br><br><br>
            
            <div>
                <input type="number" name="8"  class="inpA1" style="float: left; margin-left:15%;">
                <input type="number" name="9"  class="inpA1">
                <input type="number" name="10" class="inpA1" style="float: right; margin-right:15%;">
            </div><br><br>
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
