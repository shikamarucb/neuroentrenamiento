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
    <style>
        table tr .td1{
            width:20%; 
            font-family:'Jura', sans-serif;
            font-size:1.3em;
            text-align:center;
            border:1px solid;
        }
        
        table tr .td2{
            border: 1px solid;
            font-family:'Jura', sans-serif;
            font-size:1.0em;
        }
        
        .td2 p{
            width:90%;
            float: right;
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
        <p>Ahora asocia la palabra con su respectivo enunciado. Recuerda que no puedes observar la página anterior.</p><br><br><br>
        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria15" method="POST" autocomplete="off">
            <table>
                <tr>
                    <td class="td1">1.Anillo</td>
                    <td class="td2"><input type="number" name="capital" min="1" max="5" style="width:7%;" required><p>Es la capital del departamento de Nariño</p></td>
                </tr>
                <tr>
                    <td class="td1">2.Pasto</td>
                    <td class="td2"><input type="number" name="cuentos" min="1" max="5" style="width:7%;" required><p>Aparecen en los cuentos de hadas y las niñas sueñan con uno al crecer.  </p></td>
                </tr>
                <tr>
                    <td class="td1">3.Tomate</td>
                    <td class="td2"><input type="number" name="rojoAzul" min="1" max="5" style="width:7%;" required><p>Es el resultado de la mezcla entre el color rojo y azul.</p></td>
                </tr>
                <tr>
                    <td class="td1">4.Morado</td>
                    <td class="td2"><input type="number" name="compromiso" min="1" max="5" style="width:7%;" required><p>Es un símbolo de compromiso.</p></td>
                </tr>
                <tr>
                    <td class="td1">5.Príncipes</td>
                    <td class="td2"><input type="number" name="vegetal" min="1" max="5" style="width:7%;" required><p>Vegetal de color rojo que se utiliza en las ensaladas.</p></td>
                </tr>
            </table><br><br><br><br>
            <button type="submit" >Enviar</button>
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