<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){    
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="mate.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Plantilla</title>
</head>
<body>
<?php    
    date_default_timezone_set("America/Bogota");
    $fechaIn= date("Y-m-d");
    $inicio=microtime(true);
    $_SESSION['tIni']=$inicio;    
?>
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
            <li><a href="login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contMat" style="height:680px;">
    <div id="contMat2">
        <h1>¡PRACTICA CON NÚMEROS! </h1><br><br>
        <p>A continuación se presentan una serie de ejercicios matemáticos que debes resolver. Cuando en un ejercicio encuentres paréntesis, primero desarrolla las operaciones que se encuentren dentro de ellos. </p><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/matematicasControlador.php?value=mainMath" method="POST" autocomplete="off">
            <table id="tableMat">
                <?php            
                   include_once ("../../../Controlador/pruebas/actividadControlador.php");
                   $tipo="matematicas";
                   $actividad=new ActividadCont();
                   $info=$actividad->enunciado($tipo);
                   $i=1;
                   if($info->num_rows != 0){             
                     if($preguntas=$info->fetch_all(MYSQLI_ASSOC)){                 
                       foreach ($preguntas as  $pregunta){
                        if( $i%2 != 0){
                          ?><tr>
                                <td><div class="contPr"><label><?php echo $pregunta["enunciado_actividad"]; ?></label><input type="number" name="<?php echo $i; ?>"></div></td>
                         <?php
                         $i=$i+1;
                        }else {
                            ?>   <td><div class="contPr"><label><?php echo $pregunta["enunciado_actividad"]; ?></label><input type="number" name="<?php echo $i; ?>"></div></td>
                            </tr>
                        <?php
                            $i=$i+1;
                        } 
                       }
                     } 
                    }                      
                ?>               
            </table>
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
?>