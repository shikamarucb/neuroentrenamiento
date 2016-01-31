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
    
<div id="contmem" style="height:1050px;">
    <div><br><br>
        <p>Recuerda el texto anterior y responde las siguientes preguntas. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria23" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1) ¿Qué deporte jugaban los primos? </h2><br>
                    <input type="radio" name="1" value="parques">
                    <label>Parques</label><br>

                    <input type="radio" name="1" value="volleyball">
                    <label>Volleyball</label><br>

                    <input type="radio" name="1" value="futbol">
                    <label>Fútbol</label><br>

                    <input type="radio" name="1" value="tennis">
                    <label>Tennis</label><br><br>
                
                <h2 class="h33">2) ¿Cómo estaba la mañana el día del viaje? </h2><br>
                    <input type="radio" name="2" value="soleada">
                    <label>Soleada</label><br>

                    <input type="radio" name="2" value="lluviosa">
                    <label>Lluviosa</label><br>

                    <input type="radio" name="2" value="nublada">
                    <label>Nublada</label><br>

                    <input type="radio" name="2" value="calurosa">
                    <label>Calurosa</label><br><br>
                
                <h2 class="h33">3) ¿Por qué estaba enojada la madre? </h2><br>
                    <input type="radio" name="3" value="lloviendo">
                    <label>Porque estaba lloviendo</label><br>

                    <input type="radio" name="3" value="desorden">
                    <label>Porque había desorden</label><br>

                    <input type="radio" name="3" value="mosquitos"> 
                    <label>Porque habían mosquitos</label><br>

                    <input type="radio" name="3" value="trafico">
                    <label>Porque había mucho tráfico</label><br><br>
                
                <h2 class="h33">4) Entre los objetos que llevaban no se encontraba: </h2><br>
                    <input type="radio" name="4" value="cepillo">
                    <label>Cepillo de dientes</label><br>

                    <input type="radio" name="4" value="comida">
                    <label>Comida enlatada</label><br>

                    <input type="radio" name="4" value="carpas">
                    <label>Carpas</label><br>

                    <input type="radio" name="4" value="lazos">
                    <label>Lazos</label><br><br>
                
                <h2 class="h33">5) ¿Quiénes iban al viaje? </h2><br>
                    <input type="radio" name="5" value="hijos,sobrinos,padrinos">
                    <label>Hijos, sobrinos, padrinos</label><br>

                    <input type="radio" name="5" value="abuelos,tios,bisnietos">
                    <label>Abuelos, tíos, bisnietos</label><br>

                    <input type="radio" name="5" value="abuelos,vecinos">
                    <label>Abuelos, vecinos</label><br>

                    <input type="radio" name="5" value="tios,primos,sobrinos,padres">
                    <label>Tíos, primos, sobrinos, padres</label><br><br>
            </div>
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
