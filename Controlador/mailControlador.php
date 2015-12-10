<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");
    //include_once ("../Vista/register.html");

    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $destino="neurocartilla@gmail.com";
 	$nombre=$conexion->real_escape_string(strip_tags($_POST['nombre']));
 	$email=$conexion->real_escape_string(strip_tags($_POST['email']));
 	$asunto=$conexion->real_escape_string(strip_tags($_POST['asunto']));
 	$mensaje=$conexion->real_escape_string(strip_tags($_POST['mensaje']));
    
    $contenido="Nombre:  ".$nombre."\nCorreo:  ".$email."\nMensaje:  ".$mensaje;
    mail($destino, $asunto, $contenido); 
    header('location: ../Vista/index.html');



?>

