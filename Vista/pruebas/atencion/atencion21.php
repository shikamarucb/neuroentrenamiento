<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("atencion")){ 
        date_default_timezone_set("America/Bogota");
        $fechaIn= date("Y-m-d");
        $inicio=microtime(true);
        $_SESSION['tIni']=$inicio;
        $_SESSION['Ufecha']=$fechaIn;  
?>
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
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Prueba</a></li>
            <li><a href="login.html">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten" style="height:1280px;">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Observa detenidamente las secuencias que se presentan a continuación, identifica que figura no pertenece y seleccionala; al final de la serie escribe la cantidad. </p><br><br>
        <form action="../../../Controlador/pruebas/atencionControlador.php?value=atencion21" method="POST" autocomplete="off">
            <div>
                <h1 class="h1A1">Secuencia 1</h1>
                <img src="../imagenes/a21A.png"><br>
                <table id="table1" style="width:572px;">
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
                        <td><input type="checkbox" name="check_list1[]" value="14"></td>
                    </tr>
                </table><br>
                <input type="number" name="secuencia1" required>
            </div><br><br>
            <div>
                <h1 class="h1A1">Secuencia 2</h1>
                <img src="../imagenes/b21A.png"><br>
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
                    </tr>
                </table><br>
                <input type="number" name="secuencia2" required>
            </div><br><br>
            <div>
                <h1 class="h1A1">Secuencia 3</h1>
                <img src="../imagenes/c21A.png"><br>
                <table id="table1" style="width:601px;">
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
                    </tr>
                </table><br>
                <img src="../imagenes/d21A.png"><br>
                <table id="table1" style="width:600px;">
                    <tr>
                        <td><input type="checkbox" name="check_list3[]" value="10"></td>
                        <td><input type="checkbox" name="check_list3[]" value="11"></td>
                        <td><input type="checkbox" name="check_list3[]" value="12"></td>
                        <td><input type="checkbox" name="check_list3[]" value="13"></td>
                        <td><input type="checkbox" name="check_list3[]" value="14"></td>
                        <td><input type="checkbox" name="check_list3[]" value="15"></td>
                        <td><input type="checkbox" name="check_list3[]" value="16"></td>
                        <td><input type="checkbox" name="check_list3[]" value="17"></td>
                        <td><input type="checkbox" name="check_list3[]" value="18"></td>
                    </tr>
                </table><br>
                <input type="number" name="secuencia3"  required>
            </div><br><br>
            <div>
                <h1 class="h1A1">Secuencia 4</h1>
                <img src="../imagenes/e21A.png"><br>
                <table id="table1" style="width:597px;">
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
                        <td><input type="checkbox" name="check_list4[]" value="12"></td>
                        <td><input type="checkbox" name="check_list4[]" value="13"></td>
                    </tr>
                </table><br>
                <img src="../imagenes/f21A.png"><br>
                <table id="table1" style="width:597px;">
                    <tr>
                        <td><input type="checkbox" name="check_list4[]" value="14"></td>
                        <td><input type="checkbox" name="check_list4[]" value="15"></td>
                        <td><input type="checkbox" name="check_list4[]" value="16"></td>
                        <td><input type="checkbox" name="check_list4[]" value="17"></td>
                        <td><input type="checkbox" name="check_list4[]" value="18"></td>
                        <td><input type="checkbox" name="check_list4[]" value="19"></td>
                        <td><input type="checkbox" name="check_list4[]" value="20"></td>
                        <td><input type="checkbox" name="check_list4[]" value="21"></td>
                        <td><input type="checkbox" name="check_list4[]" value="22"></td>
                        <td><input type="checkbox" name="check_list4[]" value="23"></td>
                        <td><input type="checkbox" name="check_list4[]" value="24"></td>
                        <td><input type="checkbox" name="check_list4[]" value="25"></td>
                        <td><input type="checkbox" name="check_list4[]" value="26"></td>
                    </tr>
                </table><br>
                <input type="number" name="secuencia4" required>
            </div><br><br>
            <div>
                <h1 class="h1A1">Secuencia 5</h1>
                <img src="../imagenes/g21A.png"><br>
                <table id="table1" style="width:611px;">
                    <tr>
                        <td><input type="checkbox" name="check_list5[]" value="1"></td>
                        <td><input type="checkbox" name="check_list5[]" value="2"></td>
                        <td><input type="checkbox" name="check_list5[]" value="3"></td>
                        <td><input type="checkbox" name="check_list5[]" value="4"></td>
                        <td><input type="checkbox" name="check_list5[]" value="5"></td>
                        <td><input type="checkbox" name="check_list5[]" value="6"></td>
                        <td><input type="checkbox" name="check_list5[]" value="7"></td>
                        <td><input type="checkbox" name="check_list5[]" value="8"></td>
                        <td><input type="checkbox" name="check_list5[]" value="9"></td>
                        <td><input type="checkbox" name="check_list5[]" value="10"></td>
                        <td><input type="checkbox" name="check_list5[]" value="11"></td>
                        <td><input type="checkbox" name="check_list5[]" value="12"></td>
                        <td><input type="checkbox" name="check_list5[]" value="13"></td>
                        <td><input type="checkbox" name="check_list5[]" value="14"></td>
                    </tr>
                </table><br>
                <img src="../imagenes/h21A.png"><br>
                <table id="table1" style="width:575px;">
                    <tr>
                        <td><input type="checkbox" name="check_list5[]" value="15"></td>
                        <td><input type="checkbox" name="check_list5[]" value="16"></td>
                        <td><input type="checkbox" name="check_list5[]" value="17"></td>
                        <td><input type="checkbox" name="check_list5[]" value="18"></td>
                        <td><input type="checkbox" name="check_list5[]" value="19"></td>
                        <td><input type="checkbox" name="check_list5[]" value="20"></td>
                        <td><input type="checkbox" name="check_list5[]" value="21"></td>
                        <td><input type="checkbox" name="check_list5[]" value="22"></td>
                        <td><input type="checkbox" name="check_list5[]" value="23"></td>
                        <td><input type="checkbox" name="check_list5[]" value="24"></td>
                        <td><input type="checkbox" name="check_list5[]" value="25"></td>
                        <td><input type="checkbox" name="check_list5[]" value="26"></td>
                        <td><input type="checkbox" name="check_list5[]" value="27"></td>
                    </tr>
                </table><br>
                <input type="number" name="secuencia5" required>
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
<?php
  }
}
?>