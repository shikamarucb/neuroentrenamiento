<?php
    include_once ("../Modelo/usuario.php");
    //include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");
    //include_once ("../Vista/register.html");

    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $email=strip_tags($_POST['email']);    
    $password=strip_tags($_POST['password']);

    
    $user=new Usuario();
    $resultado=$user->getUser($conexion, $email, $password);
    if ($resultado->num_rows !=0){
        $datos=$resultado->fetch_array(MYSQLI_ASSOC);
        $nombre= $datos["nombre"];
        $email=$datos["email"];
        header('location: ../Vista/contact.html');
    }else{
        echo "Datos incorrectos";
    }


    

?>