<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");

    class UsuarioC{        
        
        public function registrar(){
            
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
        }
        
        public function loguear(){
            session_start();
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$conexion->real_escape_string(strip_tags($_POST['email']));    
            $password=$conexion->real_escape_string(strip_tags($_POST['password']));

            $user=new Usuario();
            $resultado=$user->getUser($conexion, $email, $password);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $nombre= $datos["nombre"];
                $email=$datos["email"];
                $_SESSION['session']=$email;
                header('location: ../Vista/contact.html');
            }else{
                echo "Datos incorrectos";
            }
        }       
        
        public function contactar(){
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
        }

        public function actualizar(){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $email=$conexion->real_escape_string(strip_tags($_POST['email']));
            $nombre=$conexion->real_escape_string(strip_tags($_POST['nombre']));
            $apellido=$conexion->real_escape_string(strip_tags($_POST['apellido']));
            $edad=$conexion->real_escape_string(strip_tags($_POST['edad']));
            $genero=$conexion->real_escape_string(strip_tags($_POST['genero']));
            $grado=$conexion->real_escape_string(strip_tags($_POST['grado']));            

            $user=new Usuario();
            $user->updateUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado);

            header('location: ../Vista/Administracion/dashboard.php');
        }
        public function delete(){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$_GET["email"];
 
            $user=new Usuario();
            $user->deleteUser($conexion,$email);
            
            header('location: ../Vista/Administracion/dashboard.php');

        }         
        
    }

    $metodo=$_GET['value'];
    $metodo=array('UsuarioC',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }
?>