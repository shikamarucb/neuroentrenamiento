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
<?php
    session_start();
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
            <li><a href="index.html">Prueba</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="login.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten" style="height:1000px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Lee el siguiente texto. </p><br><br>
        <p style="text-align:center;">CARØLIN3 ES UNA JØV3N, MUY 1NTELIGENTE, ESTUDIA L1TERATUR4 Y CURSA 7° SEMESTRE. CARØLINE AL IN1CIAR SEM3STRE TIENE CØMØ M3TA EMPE2AR A ESCRIBIR 5U PRØPI4 NØVELA, LA CUAL LLAMARA “MI MUNDØ EXTR4ÑØ”. PARA 3LL4 ES MUY DIFICIL, PU3S TIEN3 QUE DEDICAR TI3MPO A 5US ESTUDIØ5 Y A SU F4MILI4. 4L FINAL DEL 5EMESTRE Y CØN MUCHO E5FUERZØ LØ6RA TERM1NAR 5U NOVELA. POSTERIØRMENTE LA PR3SENTA A LA 3DITØRIAL LIT3RATUR4S S.A. Y LUEGO D3 UNA SEM4NA CARØLIN3 RECIB3 LA BUENA NOTICIA QUE SU NØVELA SERA PUBLIC4DA. </p><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion14" method="POST" autocomplete="off">
            <p>De acuerdo al texto responde las siguientes preguntas. </p><br><br>
            <div id="divA1">
                <label>1. ¿Qué semestre cursa la protagonista de la historia?</label><br>
                <input type="text" name="r1"><br><br>

                <label>2. ¿Cuál es la carrera que estudia la protagonista?</label><br>
                <input type="text" name="r2"><br><br>

                <label>3. ¿Cuál es el nombre de la protagonista?</label><br>
                <input type="text" name="r3"><br><br>

                <label>4. ¿Cuál es la meta que se planteó la Caroline al inicio de semestre? </label><br>
                <select class="slct1" name="r4">
                    <option value="Dedicar tiempo a su familia">a. Dedicar tiempo a su familia </option>
                    <option value="Retirarse de estudiar">b. Retirarse de estudiar </option>
                    <option value="Escribir su propia novela">c. Escribir su propia novela </option>
                </select><br><br>

                <label>5. ¿Cuánto tiempo tuvo que esperar Caroline para recibir repuesta de la publicación de la novela?</label><br>
                <input type="text" name="r5"><br><br>
                
                <label>6. El nombre de la editorial es: </label><br>
                <select class="slct1" name="r6">
                    <option value="Normandos Ltda">a. Normandos Ltda. </option>
                    <option value="Lee. Editores S.A">b. Lee. Editores S.A. </option>
                    <option value="Editorial literaturas S.A">c. Editorial literaturas S.A. </option>
                </select><br><br>
                
                <label>7. ¿Cuál es el nombre de la novela? </label><br>
                <select class="slct1" name="r7">
                    <option value="Mi mundo extraño">a. “Mi mundo extraño” </option>
                    <option value="Extraño mi mundo">b. “Extraño mi mundo” </option>
                    <option value="Mundo de extraños">c. “Mundo de extraños” </option>
                </select><br><br>
                
                <label>8. ¿Cuántos números cinco (5) hay en el texto?</label><br>
                <input type="number" name="r8"><br><br>
                
                <label>9. ¿Cuántos números siete (7) hay en el texto?</label><br>
                <input type="number" name="r9"><br><br>
                
                <label>10. ¿Cuántos números uno (1) hay en el texto?</label><br>
                <input type="number" name="r10"><br><br>
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