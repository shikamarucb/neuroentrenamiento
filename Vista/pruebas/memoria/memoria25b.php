<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="memoria.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Plantilla</title>
</head>
<body>
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="register.html">Registrarse</a></li>
            <li><a href="login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contmem" style="height:900px;">
    <div><br><br>
        <p>Responde las siguientes preguntas de acuerdo a las imágenes vistas. Recuerda no observar la página anterior: </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria11" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1) ¿De qué color era el triángulo? </h2><br>
                    <input type="radio" name="1">
                    <label>Amarillo</label><br>

                    <input type="radio" name="1">
                    <label>Azul</label><br>

                    <input type="radio" name="1">
                    <label>Rojo</label><br>

                    <input type="radio" name="1">
                    <label>Naranja</label><br><br>
                
                <h2 class="h33">2) ¿Cuántas puntas tenía la estrella? </h2><br>
                    <input type="radio" name="2">
                    <label>Cinco puntas</label><br>

                    <input type="radio" name="2">
                    <label>Dos puntas</label><br>

                    <input type="radio" name="2">
                    <label>Una punta</label><br>

                    <input type="radio" name="2">
                    <label>Seis puntas</label><br><br>
                
                <h2 class="h33">3) ¿Qué figura se forma dentro del círculo? </h2><br>
                    <input type="radio" name="3">
                    <label>Una raya</label><br>

                    <input type="radio" name="3">
                    <label>Una cruz</label><br>

                    <input type="radio" name="3">
                    <label>Una onda</label><br>

                    <input type="radio" name="3">
                    <label>Un rectángulo</label><br><br>
                
                <h2 class="h33">4) ¿Hacia qué dirección apunta la flecha? </h2><br>
                    <input type="radio" name="4">
                    <label>Arriba</label><br>

                    <input type="radio" name="4">
                    <label>Abajo</label><br>

                    <input type="radio" name="4">
                    <label>Izquierda</label><br>

                    <input type="radio" name="4">
                    <label>Derecha</label><br><br>
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
            <p>Centro de investigacion tecnológica</p>
        </div>
        <div>
            <p>2016</p>
        </div>
    </div>
</footer>

</body>
</html>
