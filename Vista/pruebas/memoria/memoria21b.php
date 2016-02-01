<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("memoria", "21")){ 
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
            border: 1px solid;
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
    
<div id="contmem" style="height: 1000px;">
    <div><br><br>
        <p>Marca las figuras que recuerdes de la página anterior. Recuerda que no puedes observar la página anterior. </p><br><br><br>
        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria21" method="POST" autocomplete="off">
            <table>
                <tr>
                    <td style="text-align:center;"><img src="../imagenes/a21.png"><input type="checkbox" name="check_list[]" value="TRIANGULO"></td>
                    <td style="text-align:center;"><img src="../imagenes/b21.png"><input type="checkbox" name="check_list[]" value="DIVISION"></td>
                    <td style="text-align:center;"><img src="../imagenes/c21.png"><input type="checkbox" name="check_list[]" value="TRISTE"></td>
                </tr>
                <tr>
                    <td style="text-align:center;"><img src="../imagenes/h21.png"><input type="checkbox" name="check_list[]" value="EQUIZ"></td>
                    <td style="text-align:center;"><img src="../imagenes/i21.png"><input type="checkbox" name="check_list[]" value="LLORAR"></td>
                    <td style="text-align:center;"><img src="../imagenes/g21.png"><input type="checkbox" name="check_list[]" value="tRECTANGULO"></td>
                </tr>
                <tr>
                    <td style="text-align:center;"><img src="../imagenes/d21.png"><input type="checkbox" name="check_list[]" value="FELIZ"></td>
                    <td style="text-align:center;"><img src="../imagenes/e21.png"><input type="checkbox" name="check_list[]" value="MAS"></td>
                    <td style="text-align:center;"><img src="../imagenes/f21.png"><input type="checkbox" name="check_list[]" value="PENTAGONO"></td>
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