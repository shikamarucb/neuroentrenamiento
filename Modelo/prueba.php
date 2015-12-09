<?php
    include_once 'usuario.php';
    include_once 'conexion.php';
    $conexion=new Conexion();
    $conexion=$conexion->conectar();
    
    $prueba=new Usuario('correo@mail.com','pepe','apellido','12','hombre','septimo','1234');
    $prueba->addUser($conexion);
?>