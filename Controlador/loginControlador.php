<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");
    //include_once ("../Vista/register.html");

    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $email=$conexion->real_escape_string(strip_tags($_POST['email']));    
    $password=$conexion->real_escape_string(strip_tags($_POST['password']));

   // $email=$conexion->real_escape_string($email);
    //$password=$conexion->real_escape_string($password);
    
    $user=new Usuario();
    $resultado=$user->getUser($conexion, $email, $password);
    if ($resultado->num_rows !=0){
        $datos=$resultado->fetch_array(MYSQLI_ASSOC);
        $nombre= $datos["nombre"];
        $email=$datos["email"];
        header('location: ../Vista/contact.html');
    }else{
        echo "Datos incorrectos";
        header('location: ../Vista/login.html');
    }

?>