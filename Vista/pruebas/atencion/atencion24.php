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
    
<div id="contAten" style="height:450px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>A continuación encontrarás una serie de palabras distribuidas de forma lineal, en cada renglón, selecciona la palabra que no corresponde a la categoría. </p><br><br>
        <form action="../../../Controlador/pruebas/atencionControlador.php?value=atencion24" method="POST" autocomplete="off">
            <table id="table1">
                <tr class="tr1">
                    <td>1</td>
                    <td>Plato<input type="radio" name="1" value="plato"></td>
                    <td>Pocillo<input type="radio" name="1" value="pocillo"></td>
                    <td>Arroz<input type="radio" name="1" value="arroz"></td>
                    <td>Cuchara<input type="radio" name="1" value="cuchara"></td>
                    <td>Tenedor<input type="radio" name="1" value="tenedor"></td>
                </tr>
                <tr class="tr1">
                    <td>2</td>
                    <td>Cuidar<input type="radio" name="2" value="cuidar"></td>
                    <td>Proteger<input type="radio" name="2" value="proteger"></td>
                    <td>Abrigar<input type="radio" name="2" value="abrigar"></td>
                    <td>Refugiar<input type="radio" name="2" value="refugiar"></td>
                    <td>Comer<input type="radio" name="2" value="comer"></td>
                </tr>
                <tr class="tr1">
                    <td>3</td>
                    <td>Libro<input type="radio" name="3" value="libro"></td>
                    <td>Cuaderno<input type="radio" name="3" value="cuaderno"></td>
                    <td>Martillo<input type="radio" name="3" value="martillo"></td>
                    <td>Hojas<input type="radio" name="3" value="hojas"></td>
                    <td>Lápiz<input type="radio" name="3" value="lapiz"></td>
                </tr>
                <tr class="tr1">
                    <td>4</td>
                    <td>Balón<input type="radio" name="4" value="balon"></td>
                    <td>Celular<input type="radio" name="4" value="celular"></td>
                    <td>Computador<input type="radio" name="4" value="computador"></td>
                    <td>Teléfono<input type="radio" name="4" value="telefono"></td>
                    <td>Fax<input type="radio" name="4" value="fax"></td>
                </tr>
                <tr class="tr1">
                    <td>5</td>
                    <td>Ana<input type="radio" name="5" value="ana"></td>
                    <td>Luis<input type="radio" name="5" value="luis"></td>
                    <td>Isabela<input type="radio" name="5" value="isabela"></td>
                    <td>Joanna<input type="radio" name="5" value="joanna"></td>
                    <td>Sofía<input type="radio" name="5" value="sofia"></td>
                </tr>
                
            </table><br><br>
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