<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("memoria", "22")){ 
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
    
    <style>
        td{
            border:1px solid;
        }
    </style>
        
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
        <p>Completa el siguiente cuadro de acuerdo a lo observado anteriormente. Recuerda que no puedes observar la página anterior. </p><br><br><br>
        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria22" method="POST" autocomplete="off">
            <table>
                <tr>
                    <td><h2 class="h22">5</h2><input type="text" name="color1" style="width:98%;" required></td>
                    <td><input type="number" style="width:98%;" name="color2"><h2 class="h22" style="color: green;">Verde</h2></td>
                    <td><h2 class="h22">1</h2><input type="text" style="width:98%;" name="color3"></td>
                </tr>
                <tr>
                    <td><h2 class="h22">3</h2><input type="text" style="width:98%;" name="color4"></td>
                    <td><h2 class="h22">2</h2><input type="text" style="width:98%;" name="color5"></td>
                    <td><input type="number" style="width:98%;" name="color6"><h2 class="h22" style="color: blue;">Azul</h2></td>
                </tr>
            </table><br><br><br><br>
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