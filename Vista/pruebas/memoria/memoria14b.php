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
        <p>Clasifica las palabras anteriores de acuerdo a su categoría y anótalas en el siguiente cuadro. Recuerda que no puedes observar la página anterior.</p><br><br><br>
        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria14" method="POST" autocomplete="off">
            <table>
                <tr>
                    <td style="text-align:center;"><img src="../imagenes/c14.png"><input type="number" name="circulo" required></td>
                    <td style="text-align:center;"><img src="../imagenes/d14.png"><input type="number" name="cuadradoAmarillo" required></td>
                </tr>
                <tr>
                    <td style="text-align:center;"><img src="../imagenes/a14.png"><input type="number" name="cuadradoAzul" required></td>
                    <td style="text-align:center;"><img src="../imagenes/b14.png"><input type="number" name="estrella" required></td>
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