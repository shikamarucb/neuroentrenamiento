<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");
    include_once ("../Vista/register.html");

    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $email=$conexion->real_escape_string(strip_tags($_POST['email']));
    $nombre=$conexion->real_escape_string(strip_tags($_POST['nombre']));
    $apellido=$conexion->real_escape_string(strip_tags($_POST['apellido']));
    $edad=$conexion->real_escape_string(strip_tags($_POST['edad']));
    $genero=$conexion->real_escape_string(strip_tags($_POST['genero']));
    $grado=$conexion->real_escape_string(strip_tags($_POST['grado']));
    $password=$conexion->real_escape_string(strip_tags($_POST['password']));


    
    $user=new Usuario();
    $user->addUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password);

    $control=new Control($email);
    $control->addControl($conexion);

    header('location: ../Vista/login.html');
   
?>