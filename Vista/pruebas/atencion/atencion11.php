<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){ 
      if($permiso->accederPruebas("atencion","11")){ 
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
            <li><a href="../menu/prueba.php">Prueba</a></li>
            <li><a href="../menu/miGrafica.php">Progreso</a></li>
            <li><a href="../../../Controlador/userController.php?value=logout">Cerrar Sesión</a></li>
        </ul>
    </div>
</nav>
    
<div id="contAten">
    <div id="contAten2">
        <h1>¡PRUEBA TU ATENCIÓN! </h1><br><br>
        <p>Observa detenidamente las casillas que se presentan en la parte inferior de este enunciado. Cada número corresponde a una letra del alfabeto. Encuentra el nombre de países y ciudades ocultos de acuerdo al número correspondiente a cada letra. </p><br><br>
        <table id="table1">
            <tr class="tr1">
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>F</td>
                <td>G</td>
                <td>H</td>
                <td>I</td>
                <td>J</td>
                <td>K</td>
                <td>L</td>
                <td>M</td>
            </tr>
            <tr class="tr1">
                <td>3</td>
                <td>17</td>
                <td>10</td>
                <td>13</td>
                <td>19</td>
                <td>7</td>
                <td>18</td>
                <td>30</td>
                <td>15</td>
                <td>6</td>
                <td>5</td>
                <td>29</td>
                <td>14</td>
            </tr>
            <tr class="tr2">
                <td>N</td>
                <td>O</td>
                <td>P</td>
                <td>Q</td>
                <td>R</td>
                <td>S</td>
                <td>T</td>
                <td>U</td>
                <td>V</td>
                <td>W</td>
                <td>X</td>
                <td>Y</td>
                <td>Z</td>
            </tr>
            <tr class="tr2">
                <td>1</td>
                <td>16</td>
                <td>25</td>
                <td>8</td>
                <td>20</td>
                <td>12</td>
                <td>9</td>
                <td>26</td>
                <td>4</td>
                <td>11</td>
                <td>22</td>
                <td>2</td>
                <td>21</td>
            </tr>
            
        </table><br><br>
        <form style="text-align:center;" action="../../../Controlador/pruebas/atencionControlador.php?value=atencion11" method="POST" autocomplete="off">
            <table id="table1">
                <tr>
                    <td>15</td>
                    <td>9</td>
                    <td>3</td>
                    <td>29</td>
                    <td>15</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td><input type="text" class="inpt11" name="1" required></td>
                    <td><input type="text" class="inpt11" name="2" required></td>
                    <td><input type="text" class="inpt11" name="3" required></td>
                    <td><input type="text" class="inpt11" name="4" required></td>
                    <td><input type="text" class="inpt11" name="5" required></td>
                    <td><input type="text" class="inpt11" name="6" required></td>
                </tr>
            </table><br><br>
            
            <table id="table1">
                <tr>
                    <td>25</td>
                    <td>3</td>
                    <td>20</td>
                    <td>25</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td><input type="text" class="inpt11" name="7" required></td>
                    <td><input type="text" class="inpt11" name="8" required></td>
                    <td><input type="text" class="inpt11" name="9" required></td>
                    <td><input type="text" class="inpt11" name="10" required></td>
                    <td><input type="text" class="inpt11" name="11" required></td>
                </tr>
            </table><br><br>
            
            <table id="table1">
                <tr>
                    <td>3</td>
                    <td>20</td>
                    <td>18</td>
                    <td>19</td>
                    <td>1</td>
                    <td>9</td>
                    <td>15</td>
                    <td>1</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td><input type="text" class="inpt11" name="12" required></td>
                    <td><input type="text" class="inpt11" name="13" required></td>
                    <td><input type="text" class="inpt11" name="14" required></td>
                    <td><input type="text" class="inpt11" name="15" required></td>
                    <td><input type="text" class="inpt11" name="16" required></td>
                    <td><input type="text" class="inpt11" name="17" required></td>
                    <td><input type="text" class="inpt11" name="18" required></td>
                    <td><input type="text" class="inpt11" name="19" required></td>
                    <td><input type="text" class="inpt11" name="20" required></td>
                </tr>
            </table><br><br>
            
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
            <p>Centro de investigación tecnológica</p>
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