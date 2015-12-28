<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../main.css" rel="stylesheet" type="text/css">
    <link href="atencion.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <title>Plantilla</title>
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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="register.html">Registrarse</a></li>
            <li><a href="login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten" style="height:450px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Imagina que vas para un salón de clase y el círculo que aparece en el centro de la hoja representa una maleta. Deberás alistar las cosas que te serían útiles para la clase, para esto te presentamos una serie de palabras. Selecciona aquellas que consideres apropiadas para un día de clases. </p><br><br>
        <img src="../imagenes/atencion44.png">
        <form style="text-align:center; min-width:1024px;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion44" method="POST" autocomplete="off">
            <table id="table1">
                <tr class="tr1">
                    <td>Cuadernos<input type="checkbox" name="check_list[]" value="CUADERNOS"></td>
                    <td>Herramientas<input type="checkbox" name="check_list[]" value="HERRAMIENTAS"></td>
                    <td>Ropa<input type="checkbox" name="check_list[]" value="ROPA"></td>
                </tr>
                <tr class="tr1">
                    <td>Libros<input type="checkbox" name="check_list[]" value="LIBROS"></td>
                    <td>Colores<input type="checkbox" name="check_list[]" value="COLORES"></td>
                    <td>Animales<input type="checkbox" name="check_list[]" value="ANIMALES"></td>
                </tr>
                <tr class="tr1">
                    <td>Medias<input type="checkbox" name="check_list[]" value="MEDIAS"></td>
                    <td>Lápices<input type="checkbox" name="check_list[]" value="LAPICES"></td>
                    <td>Calculadora<input type="checkbox" name="check_list[]" value="CALCULADORA"></td>
                </tr>
            </table>
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