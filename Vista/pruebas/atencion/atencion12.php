<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("atencion")){ 
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
            <li><a href="index.html">Prueba</a></li>
            <li><a href="login.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten" style="height:580px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Encuentra el número correspondiente </p><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion12" method="POST" autocomplete="off">
            <div style="margin:0 auto; width:90%; text-align:center;">
                <p>Entre las letras “B” encuentra los números 8 y escribe cuántos encuentras.</p><br>
                <p style="text-align:center;">BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB8BBBBBBBBBBBBBBBBB
                    BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
                    BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB8BBBBBBBBBBBBBBBBBBBBBBBB
                    BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
                    BBBB8BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
                    BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB8BBBBB
                    BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB<br>
                    BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB 
                </p>
                <input type="number" name="ochos">
            </div><br><br>
            <div style="margin:0 auto; width:90%; text-align:center;">
                <p>Entre las letras “G” encuentra los números 6 y escribe cuántos encuentras </p><br>
                <p style="text-align:center;">GGGGGGGGG6GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG6GGGGGGGG
                    GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG6GGGGGGGGGG
                    GGGGGGGGGGGGGGGGGGGGGGGGG6GGGGGGGGGGGGGG6GGGGGGGGGGGGGGG
                    GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
                    GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
                    GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
                    GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG<br>
                    GGGGGGGGGGGGGGGGG6GGGGGGGGGGGGGGGGGGGGGGGGGGG  
                </p>
                <input type="number" name="seis">
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