<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="memoria.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Memoria</title>
</head>
<body>
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="../../index.html">Prueba</a></li>
            <li><a href="../../contact.html">Contacto</a></li>
            <li><a href="../../login.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contmem" style="height:800px;">
    <div><br><br>
        <p>Responde las preguntas sin mirar la página anterior, recuerda que este es un ejercicio de memoria, </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria42" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1. El número total de rectángulos al interior del cuadro son: </h2><br>
                    <input type="radio" name="1" value="12">
                    <label>12</label>

                    <input type="radio" name="1" value="9">
                    <label>9</label>

                    <input type="radio" name="1" value="15">
                    <label>15</label><br><br>
                
                <h2 class="h33">2. Los colores de las líneas que forman el cuadro son: </h2><br>
                    <input type="radio" name="2" value="verde,azul,morado">
                    <label>Verde, azul y morado</label>

                    <input type="radio" name="2" value="azul,rojo,negro">
                    <label>Azul, rojo y negro</label>

                    <input type="radio" name="2" value="azul,morado,rojo">
                    <label>Azul, morado y rojo</label><br><br>
                
                <h2 class="h33">3. El color de la equis (X) en el interior del cuadro es: </h2><br>
                    <input type="radio" name="3" value="azul">
                    <label>Azul</label>

                    <input type="radio" name="3" value="rosado">
                    <label>Rosado</label>

                    <input type="radio" name="3" value="negro">
                    <label>Negro</label><br><br>
                
                <h2 class="h33">4. El color de líneas que más se repite en la figura es: </h2><br>
                    <input type="radio" name="4" value="rojo">
                    <label>Rojo</label>

                    <input type="radio" name="4" value="verde">
                    <label>Verde</label>

                    <input type="radio" name="4" value="naranja">
                    <label>Naranja</label><br><br>
                
                <h2 class="h33">5. Al interior de la figura hay dos líneas verticales de color: </h2><br>
                    <input type="radio" name="5" value="azul,naranja">
                    <label>Azul y naranja</label>

                    <input type="radio" name="5" value="naranja,rojo">
                    <label>Naranja y rojo</label>

                    <input type="radio" name="5" value="azul,rojo">
                    <label>Azul y rojo</label><br><br>
                
                <h2 class="h33">6. En el centro de la imagen se observa: </h2><br>
                    <input type="radio" name="6" value="sol">
                    <label>Sol</label>

                    <input type="radio" name="6" value="circulo">
                    <label>Círculo</label>

                    <input type="radio" name="6" value="estrella">
                    <label>Estrella</label><br><br>
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
