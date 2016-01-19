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
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../../contact.html">Contacto</a></li>
            <li><a href="../../register.html">Registrarse</a></li>
            <li><a href="../../login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten" style="height:980px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Observa las siguientes imágenes. Presta mucha atención y selecciona las figuras que crees que interrumpen las secuencias. Escribe el número de veces en el cuadro correspondiente. </p><br><br>
        <form action="../../../Controlador/pruebas/atencionControlador.php?value=atencion31" method="POST" autocomplete="off">
            <div>
                <h1 class="h1A1">Secuencia 1</h1><br>
                <table id="table1" style="width:500px;">
                    <tr>
                        <td><input type="checkbox" name="check_list1[]" value="1"></td>
                        <td><input type="checkbox" name="check_list1[]" value="2"></td>
                        <td><input type="checkbox" name="check_list1[]" value="3"></td>
                        <td><input type="checkbox" name="check_list1[]" value="4"></td>
                        <td><input type="checkbox" name="check_list1[]" value="5"></td>
                        <td><input type="checkbox" name="check_list1[]" value="6"></td>
                        <td><input type="checkbox" name="check_list1[]" value="7"></td>
                        <td><input type="checkbox" name="check_list1[]" value="8"></td>
                        <td><input type="checkbox" name="check_list1[]" value="9"></td>
                        <td><input type="checkbox" name="check_list1[]" value="10"></td>
                        <td><input type="checkbox" name="check_list1[]" value="11"></td>
                        <td><input type="checkbox" name="check_list1[]" value="12"></td>
                        <td><input type="checkbox" name="check_list1[]" value="13"></td>
                    </tr>
                </table>
                <img src="../imagenes/a31A.png"><br>
                <input type="number" name="secuencia1">
            </div><br><br>
            <div>
                <h1 class="h1A1">Secuencia 2</h1>
                <img src="../imagenes/b31A.png"><br>
                <table id="table1" style="width:593px;">
                    <tr>
                        <td><input type="checkbox" name="check_list2[]" value="1"></td>
                        <td><input type="checkbox" name="check_list2[]" value="2"></td>
                        <td><input type="checkbox" name="check_list2[]" value="3"></td>
                        <td><input type="checkbox" name="check_list2[]" value="4"></td>
                        <td><input type="checkbox" name="check_list2[]" value="5"></td>
                        <td><input type="checkbox" name="check_list2[]" value="6"></td>
                        <td><input type="checkbox" name="check_list2[]" value="7"></td>
                        <td><input type="checkbox" name="check_list2[]" value="8"></td>
                        <td><input type="checkbox" name="check_list2[]" value="9"></td>
                        <td><input type="checkbox" name="check_list2[]" value="10"></td>
                        <td><input type="checkbox" name="check_list2[]" value="11"></td>
                        <td><input type="checkbox" name="check_list2[]" value="12"></td>
                        <td><input type="checkbox" name="check_list2[]" value="13"></td>
                        <td><input type="checkbox" name="check_list2[]" value="14"></td>
                    </tr>
                </table><br>
                <input type="number" name="secuencia2">
            </div><br><br>
            <div>
                <h1 class="h1A1">Secuencia 3</h1>
                <img src="../imagenes/c31A.png"><br>
                <table id="table1" style="width:459px;">
                    <tr>
                        <td><input type="checkbox" name="check_list3[]" value="1"></td>
                        <td><input type="checkbox" name="check_list3[]" value="2"></td>
                        <td><input type="checkbox" name="check_list3[]" value="3"></td>
                        <td><input type="checkbox" name="check_list3[]" value="4"></td>
                        <td><input type="checkbox" name="check_list3[]" value="5"></td>
                        <td><input type="checkbox" name="check_list3[]" value="6"></td>
                        <td><input type="checkbox" name="check_list3[]" value="7"></td>
                        <td><input type="checkbox" name="check_list3[]" value="8"></td>
                        <td><input type="checkbox" name="check_list3[]" value="9"></td>
                        <td><input type="checkbox" name="check_list3[]" value="10"></td>
                        <td><input type="checkbox" name="check_list3[]" value="11"></td>
                        <td><input type="checkbox" name="check_list3[]" value="12"></td>
                        <td><input type="checkbox" name="check_list3[]" value="13"></td>
                    </tr>
                </table><br>
                <input type="number" name="secuencia3">
            </div><br><br>
            <div>
                <h1 class="h1A1">Secuencia 4</h1>
                <img src="../imagenes/d31A.png"><br>
                <table id="table1" style="width:565px;">
                    <tr>
                        <td><input type="checkbox" name="check_list4[]" value="1"></td>
                        <td><input type="checkbox" name="check_list4[]" value="2"></td>
                        <td><input type="checkbox" name="check_list4[]" value="3"></td>
                        <td><input type="checkbox" name="check_list4[]" value="4"></td>
                        <td><input type="checkbox" name="check_list4[]" value="5"></td>
                        <td><input type="checkbox" name="check_list4[]" value="6"></td>
                        <td><input type="checkbox" name="check_list4[]" value="7"></td>
                        <td><input type="checkbox" name="check_list4[]" value="8"></td>
                        <td><input type="checkbox" name="check_list4[]" value="9"></td>
                        <td><input type="checkbox" name="check_list4[]" value="10"></td>
                        <td><input type="checkbox" name="check_list4[]" value="11"></td>
                    </tr>
                </table><br>
                <input type="number" name="secuencia4">
            </div><br><br>
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