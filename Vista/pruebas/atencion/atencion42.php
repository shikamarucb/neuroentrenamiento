<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("atencion","42")){ 
        date_default_timezone_set("America/Bogota");
        $fechaIn= date("Y-m-d");
        $inicio=microtime(true);
        $_SESSION['tIni']=$inicio;
        $_SESSION['Ufecha']=$fechaIn;  
?>
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
    
<div id="contAten" style="height:740px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>A continuación te presentamos una serie de palabras en secuencia. Identifica las palabras que sean diferentes. Escribe en el cuadro la cantidad. En lo posible realiza el ejercicio usando únicamente tus ojos, no uses los dedos como guía o cualquier otro objeto. </p><br><br>
        
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion42" method="POST" autocomplete="off">
            <div style="margin:0 auto; width:90%; text-align:center;">
                <img src="../imagenes/a42A.png"><br>
                <input type="number" name="1" required >
            </div><br><br>
            
            <div style="margin:0 auto; width:90%; text-align:center;">
                <img src="../imagenes/b42A.png"><br>
                <input type="number" name="2" required>
            </div><br><br>
            
            <div style="margin:0 auto; width:90%; text-align:center;">
                <img src="../imagenes/c42A.png"><br>
                <input type="number" name="3" required>
            </div><br><br>
            
            <div style="margin:0 auto; width:90%; text-align:center;">
                <img src="../imagenes/d42A.png"><br>
                <input type="number" name="4" required>
            </div><br><br>
            
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