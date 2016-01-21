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
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <style>
        .pruebaDia{
            font-size: 2em;
            text-align: center;
            display: block;
        }
    </style>
    
    <title>Prueba</title>
</head>
<body>
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>        
    </div>
    <div id="menu">
        <ul>
            <?php
              include_once ("../../../Controlador/datosControl.php");
              $usuarios=new DatosControl();
              $email=$_SESSION['session'];
              $nombre=$_SESSION['name'];
              $info=$usuarios->getControl($email);              
              $semana=$info['semana_usuario'];
              $dia=$info['dia_usuario'];
              echo "dia: ".$dia;
              echo "semana: ".$semana; 
            ?>
            <li><a href="#">Prueba</a></li>            
            <li><a href="progreso.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
        <div><li>Bienvenido:  <?php echo $nombre ?></li></div>
    </div>    
</nav>
    
<div id="cont1C" style="min-height:410px;">
    <div><br><br>
        <h1>Prueba del Dia</h1><br>
        <p>Escoge con que prueba deseas empezar.</p><br><br><br>
        <a class="pruebaDia" href="../atencion/atencion<?php echo $semana.$dia?>.php">Atención<i class="fa fa-eye"></i></a><br>
        <a class="pruebaDia" href="../matematicas/matematicas<?php if($semana.$dia == '24' || $semana.$dia == '25' || $semana.$dia == '33') echo $semana.$dia?>.php">Matemáticas<i class="fa fa-percent"></i></a><br>
        <a class="pruebaDia" href="../memoria/memoria<?php echo $semana.$dia?>.php">Memoria<i class="fa fa-commenting-o"></i></a>
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