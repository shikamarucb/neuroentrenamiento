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
    
<div id="contmem" style="height:800px;">
    <div><br><br>
        <p>A continuación responde las siguientes preguntas de selección múltiple de acuerdo al ejercicio, recuerda que no debes ver la página anterior hasta que respondas cada una de las preguntas. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria11" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1) La figura que aparece en color rojo es: </h2><br>
                    <input type="radio" name="1">
                    <label>Nube</label>

                    <input type="radio" name="1">
                    <label>Flecha</label>

                    <input type="radio" name="1">
                    <label>Cruz</label>

                    <input type="radio" name="1">
                    <label>Cilindro</label><br><br>
                
                <h2 class="h33">2) La flecha que señala hacia abajo es de color: </h2><br>
                    <input type="radio" name="2">
                    <label>Rojo</label>

                    <input type="radio" name="2">
                    <label>Verde</label>

                    <input type="radio" name="2">
                    <label>Negro</label>

                    <input type="radio" name="2">
                    <label>Morado</label><br><br>
                
                <h2 class="h33">3) La figura que aparece en color Morado es: </h2><br>
                    <input type="radio" name="3">
                    <label>Cilindro</label>

                    <input type="radio" name="3">
                    <label>Triángulo</label>

                    <input type="radio" name="3">
                    <label>Hexágono</label>

                    <input type="radio" name="3">
                    <label>Cubo</label><br><br>
                
                <h2 class="h33">4) El color que observaste en la estrella de cinco puntas fue: </h2><br>
                    <input type="radio" name="4">
                    <label>Blanca</label>

                    <input type="radio" name="4">
                    <label>Amarilla</label>

                    <input type="radio" name="4">
                    <label>Roja</label>

                    <input type="radio" name="4">
                    <label>Naranja</label><br><br>
                
                <h2 class="h33">5) La figura de color azul es: </h2><br>
                    <input type="radio" name="5">
                    <label>Cubo</label>

                    <input type="radio" name="5">
                    <label>Flecha</label>

                    <input type="radio" name="5">
                    <label>Estrella</label>

                    <input type="radio" name="5">
                    <label>Hexágono</label><br><br>
                
                <h2 class="h33">6) La figura que es de color gris es: </h2><br>
                    <input type="radio" name="6">
                    <label>Rombo</label>

                    <input type="radio" name="6">
                    <label>Cilindro</label>

                    <input type="radio" name="6">
                    <label>Triángulo</label>

                    <input type="radio" name="6">
                    <label>Hexágono</label><br><br>
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
