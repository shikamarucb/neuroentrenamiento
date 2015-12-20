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
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../../contact.html">Contacto</a></li>
            <li><a href="../../register.html">Registrarse</a></li>
            <li><a href="../../login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contmem" style="height:1050px;">
    <div><br><br>
        <p>Ahora responde las siguientes preguntas. Recuerda que no puedes mirar la página anterior. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria31" method="POST" autocomplete="off">
            <div id="questionsMemA">
                <h2 class="h33">1) La cantidad de círculos que aparecen en la imagen son: </h2><br>
                    <input type="radio" name="1" value="cuatro">
                    <label>4</label>

                    <input type="radio" name="1" value="seis">
                    <label>6</label>

                    <input type="radio" name="1" value="dos">
                    <label>2</label>

                    <input type="radio" name="1" value="tres">
                    <label>3</label><br><br>
                
                <h2 class="h33">2) La figura que aparece en color amarillo es: </h2><br>
                    <input type="radio" name="2" value="circulo">
                    <label>Círculo</label>

                    <input type="radio" name="2" value="triangulo">
                    <label>Triángulo</label>

                    <input type="radio" name="2" value="rayo">
                    <label>Rayo</label>

                    <input type="radio" name="2" value="cuadrado">
                    <label>Cuadrado</label><br><br>
                
                <h2 class="h33">3) Los cuadros negros que aparecen en la imagen son: </h2><br>
                    <input type="radio" name="3" value="uno">
                    <label>1</label>

                    <input type="radio" name="3" value="cero">
                    <label>0</label>

                    <input type="radio" name="3" value="dos">
                    <label>2</label>

                    <input type="radio" name="3" value="cuatro">
                    <label>4</label><br><br>
                
                <h2 class="h33">4) La cantidad total de rombos que hay en la imagen son: </h2><br>
                    <input type="radio" name="4" value="cuatro">
                    <label>4</label>

                    <input type="radio" name="4" value="dos">
                    <label>2</label>

                    <input type="radio" name="4" value="tres">
                    <label>3</label>

                    <input type="radio" name="4" value="uno">
                    <label>1</label><br><br>
                
                <h2 class="h33">5) El color que más se repite en las figuras de la imagen es: </h2><br>
                    <input type="radio" name="5" value="azul">
                    <label>Azul</label>

                    <input type="radio" name="5" value="amarillo">
                    <label>Amarillo</label>

                    <input type="radio" name="5" value="gris">
                    <label>Gris</label>

                    <input type="radio" name="5" value="rojo">
                    <label>Rojo</label><br><br>
                
                <h2 class="h33">6) ¿Qué imagen no alcanzaba a tocar ningún lado de las otras figuras? </h2><br>
                    <input type="radio" name="6" value="circulo">
                    <label>Círculo</label>

                    <input type="radio" name="6" value="cuadro">
                    <label>Cuadro</label>

                    <input type="radio" name="6" value="estrella">
                    <label>Estrella</label>

                    <input type="radio" name="6" value="rombo">
                    <label>Rombo</label><br><br>
                
                <h2 class="h33">7) ¿Cuántos hexágonos observaste en la imagen? </h2><br>
                    <input type="radio" name="7" value="dos">
                    <label>2</label>

                    <input type="radio" name="7" value="cero">
                    <label>0</label>

                    <input type="radio" name="7" value="uno">
                    <label>1</label>

                    <input type="radio" name="7" value="tres">
                    <label for="7">3</label><br><br>
                
                <h2 class="h33">8) ¿Qué figura aparecía en color negro? </h2><br>
                    <input type="radio" name="8" value="rombo">
                    <label>Rombo</label>

                    <input type="radio" name="8" value="triangulo">
                    <label>Triángulo</label>

                    <input type="radio" name="8" value="circulo">
                    <label>Círculo</label>

                    <input type="radio" name="8" value="rayo">
                    <label>Rayo</label><br><br>
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
