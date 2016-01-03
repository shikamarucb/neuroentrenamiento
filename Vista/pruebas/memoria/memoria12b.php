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
    
<div id="contmem" style="height:750px;">
    <div><br><br>
        <p>Selecciona el cuadro segun la imagen. Recuerda que no puedes observar la página anterior. </p><br><br><br>

        <form action="../../../Controlador/pruebas/memoriaControlador.php?value=memoria12" method="POST" autocomplete="off">
            <table> 
                <tr>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/a12Me.png">
                            <select name="1">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/e12Me.png">
                            <select name ="2">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/g12Me.png">
                            <select name="3">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/c12Me.png">
                            <select name="4">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/f12Me.png">
                            <select name="5">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/h12Me.png">
                            <select name="6">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/b12Me.png">
                            <select name="7">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div style="text-align:center;">
                            <img src="../imagenes/d12Me.png">
                            <select name="8">
                                <option value="cuadro-A">Cuadro A</option>
                                <option value="cuadro-B">Cuadro B</option>
                            </select>
                        </div>
                    </td>
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
