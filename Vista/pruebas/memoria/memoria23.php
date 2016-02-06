<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("memoria", "23")){ 
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
    <link href="memoria.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">document.oncontextmenu = function(){return false;}</script>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Memoria</title>
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
    
<div id="contmem">
    <div>
        <h1>¡PRUEBA TU MEMORIA! </h1><br><br>
        <p>Lee y comprende el siguiente texto. </p><br><br>
        <div style="width:70%; margin:0 auto;">
            <p style="text-align:justify; color:black; line-height:50px;">A petición de mis tíos, primos, sobrinos y mis padres, una mañana soleada, decidimos ir de viaje a las colinas que limitaban con nuestra ciudad. Llevábamos de todo: carpas, comida enlatada, toallas, cubiertos, servilletas, líquidos, bloqueador solar, crema dental, cepillos de dientes, peines, etc., ¡Era un cuadro familiar! Al llegar a las colinas, mi tío se encargó de armar la carpa, mis primos jugaban fútbol, mientras que mi madre estaba enojada por el desorden. Mi padre y yo fuimos por leña para poder encender la fogata en resumidas cuentas fue un día increíble y de seguro lo repetiremos la semana que viene. </p>
        </div><br><br>
        <a href="memoria23b.php">Siguiente</a>
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