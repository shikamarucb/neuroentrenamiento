<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");
    include_once ("../Vista/register.html");

    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $email=strip_tags($_POST['email']);
    $nombre=strip_tags($_POST['nombre']);
    $apellido=strip_tags($_POST['apellido']);
    $edad=strip_tags($_POST['edad']);
    $genero=strip_tags($_POST['genero']);
    $grado=strip_tags($_POST['grado']);
    $password=strip_tags($_POST['password']);

    
    $user=new Usuario($email,$nombre,$apellido,$edad,$genero,$grado,$password);
    $user->addUser($conexion);

    $control=new Control($email);
    $control->addControl($conexion);

    header('location: ../Vista/login.html')

?>