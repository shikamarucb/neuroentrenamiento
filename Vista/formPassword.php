<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One|Jura:600,400,500|Exo+2:400,500' rel='stylesheet' type='text/css'>
    <script language="Javascript" type="text/javascript" src="js/passwords.js"></script>
    <title>Restablecer contraseña</title>
</head>
<body>
<nav id="navi">
    <div id="title">
        <h1>Neuroentrenamiento</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="informacion.html">Información</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="register.html">Registrarse</a></li>
            <li><a href="login.html">Iniciar Sesion</a></li>
        </ul>
    </div>
</nav>
    
<div id="cont1L">
    <div><br><br>
        <h1>Recuperar contraseña</h1><br>
        <p> 
        </p>
    </div><br><br>
    
    <div id="cont1L1">
        <p>Escribe tu nueva contraseña; con ella podrás ingresar de ahora en adelante  al aplicativo. 
        </p>
    </div>
    <div id="cont1L2">
        <form name="login" action="../Controlador/userController.php?value=restablecer" method="POST">
            <?php  $email=strip_tags($_GET['email']);?>
            <input type="hidden" value="<?php echo $email ?>" name="email"><br>
            <input type="password" placeholder="Nueva Contraseña" name="password" required><br>
            <input type="password" placeholder="Repetir Contraseña" name="password2" required><br><br>           
            <button type="submit" onclick="return compara();">Restablecer</button>            
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