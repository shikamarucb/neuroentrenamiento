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
    
<div id="contmem">
    <div><br><br>
        <p>Clasifica las palabras anteriores de acuerdo a su categoría y anótalas en el siguiente cuadro. Recuerda que no puedes observar la página anterior.</p><br><br><br>
        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria13" method="POST" autocomplete="off">
            <table>
                <tr>
                    <th>Animales Salvajes</th>
                    <th>Animales Domésticos</th>
                </tr>
                <tr>
                    <td><input type="text" name="salvaje1" required></td>
                    <td><input type="text" name="domestico1" required></td>
                </tr>    
                <tr>
                    <td><input type="text" name="salvaje2" required></td>
                    <td><input type="text" name="domestico2" required></td>
                </tr>    
                <tr>
                    <td><input type="text" name="salvaje3" required></td>
                    <td><input type="text" name="domestico3"required></td>
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