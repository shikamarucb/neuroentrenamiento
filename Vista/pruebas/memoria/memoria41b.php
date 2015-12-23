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
    
<div id="contmem">
    <div><br><br>
        <p>Escribe las palabras en las columnas en su orden correspondiente. Recuerda que no puedes mirar la página anterior. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria33" method="POST" autocomplete="off">
            <table> 
                <tr>
                    <th>Columna A</th>
                    <th>Columna B</th>
                    <th>Columna C</th>
                </tr>
                <tr>
                    <td><input type="text" name="1" required></td>
                    <td><input type="text" name="2" required></td>
                    <td><input type="text" name="2" required></td>
                </tr>
                    
                <tr>                    
                    <td><input type="text"  name="3"  value="" required></td>
                    <td><input type="text"  name="4" required></td>
                    <td><input type="text" name="2" required></td>
                </tr>

                <tr>
                    <td><input type="text" name="5" required></td>
                    <td><input type="text"  name="6"  value="" required></td>
                    <td><input type="text" name="2" required></td>
                </tr>
                
                <tr>
                    <td><input type="text"  name="7" required></td>
                    <td><input type="text"  name="8" required></td>
                    <td><input type="text" name="2" required></td>
                </tr>

                <tr>
                    <td><input type="text" name="9" required></td>
                    <td><input type="text" name="10" required></td>
                    <td><input type="text" name="2" required></td>
                </tr>
            </table><br><br><br><br>
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