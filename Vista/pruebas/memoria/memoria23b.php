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
    
<div id="contmem" style="height:1050px;">
    <div><br><br>
        <p>Recuerda el texto anterior y responde las siguientes preguntas. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria11" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1) ¿Qué deporte jugaban los primos? </h2><br>
                    <input type="radio" name="1">
                    <label>Parques</label><br>

                    <input type="radio" name="1">
                    <label>Volleyball</label><br>

                    <input type="radio" name="1">
                    <label>Fútbol</label><br>

                    <input type="radio" name="1">
                    <label>Tennis</label><br><br>
                
                <h2 class="h33">2) ¿Cómo estaba la mañana el día del viaje? </h2><br>
                    <input type="radio" name="2">
                    <label>Soleada</label><br>

                    <input type="radio" name="2">
                    <label>Lluviosa</label><br>

                    <input type="radio" name="2">
                    <label>Nublada</label><br>

                    <input type="radio" name="2">
                    <label>Calurosa</label><br><br>
                
                <h2 class="h33">3) ¿Por qué estaba enojada la madre? </h2><br>
                    <input type="radio" name="3">
                    <label>Porque estaba lloviendo</label><br>

                    <input type="radio" name="3">
                    <label>Porque había desorden</label><br>

                    <input type="radio" name="3">
                    <label>Porque habían mosquitos</label><br>

                    <input type="radio" name="3">
                    <label>Porque había mucho tráfico</label><br><br>
                
                <h2 class="h33">4) Entre los objetos que llevaban no se encontraba: </h2><br>
                    <input type="radio" name="4">
                    <label>Cepillo de dientes</label><br>

                    <input type="radio" name="4">
                    <label>Comida enlatada</label><br>

                    <input type="radio" name="4">
                    <label>Carpas</label><br>

                    <input type="radio" name="4">
                    <label>Lazos</label><br><br>
                
                <h2 class="h33">5) ¿Quiénes iban al viaje? </h2><br>
                    <input type="radio" name="5">
                    <label>Hijos, sobrinos, padrinos</label><br>

                    <input type="radio" name="5">
                    <label>Abuelos, tíos, bisnietos</label><br>

                    <input type="radio" name="5">
                    <label>Abuelos, vecinos</label><br>

                    <input type="radio" name="5">
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
            <p>Centro de investigacion tecnológica</p>
        </div>
        <div>
            <p>2016</p>
        </div>
    </div>
</footer>

</body>
</html>
