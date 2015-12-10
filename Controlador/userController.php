<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");

    class UsuarioC{
        public function registrar(){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            $email=strip_tags($_POST['email']);
            $nombre=strip_tags($_POST['nombre']);
            $apellido=strip_tags($_POST['apellido']);
            $edad=strip_tags($_POST['edad']);
            $genero=strip_tags($_POST['genero']);
            $grado=strip_tags($_POST['grado']);
            $password=strip_tags($_POST['password']);



            $user=new Usuario();
            $user->addUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password);

            $control=new Control($email);
            $control->addControl($conexion);

            header('location: ../Vista/login.html');
        }
        
        public function loguear(){
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
        }
        
    }

    $metodo=$_GET['value'];
    $metodo=array('UsuarioC',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }
?>