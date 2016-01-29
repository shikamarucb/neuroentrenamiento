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
    
<div id="contAten" style="height:615px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Lee el siguiente texto. </p><br><br>
        <p style="text-align:center;">Pedro se encuentra trabajando en su taller de carpintería la mayor parte del tiempo. Esto le dificulta cumplir con sus obligaciones de padre y esposo. Con el paso de los días, Pedro reflexiona sobre esta situación y decide distribuir su tiempo de manera equitativa, por esa razón cambia su comportamiento y ahora sale con su familia a parques, museos y bibliotecas. Su esposa Ruth se siente muy alegre y sus hijos, Tomás, Mariana y Josué, felices. Ahora Pedro es una persona que puede cumplir sus obligaciones laborales y familiares. </p><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion13" method="POST" autocomplete="off">
            <p>Responde las siguientes preguntas de acuerdo al texto anterior. </p><br><br>
            <div id="divA1">
                <label>¿Quién trabaja la mayor parte del tiempo?</label><br>
                <input type="text" name="r1" required><br><br>

                <label>¿Qué lugares visita la familia?</label><br>
                <input type="text" name="r2" required><br><br>

                <label>¿Cuántos hijos tiene el protagonista?</label><br>
                <input type="text" name="r3" required><br><br>

                <label>¿Cómo se llama la esposa del protagonista?</label><br>
                <input type="text" name="r4" required><br><br>

                <label>¿Cuál es la profesión del protagonista?</label><br>
                <input type="text" name="r5" required><br><br>
            </div>
            
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