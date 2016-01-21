<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");

    class UsuarioC{        
        
        public function registrar(){//funcion para registrar los nuevos usuarios... 
            
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
        public function registrarAdmin(){//funcion para registrar los nuevos administradores... 
            
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $email=$conexion->real_escape_string(strip_tags($_POST['email']));
            $nombre=$conexion->real_escape_string(strip_tags($_POST['nombre']));
            $apellido=$conexion->real_escape_string(strip_tags($_POST['apellido']));
            $edad=$conexion->real_escape_string(strip_tags($_POST['edad']));
            $genero=$conexion->real_escape_string(strip_tags($_POST['genero']));            
            $password=$conexion->real_escape_string(strip_tags($_POST['password']));

            $user=new Usuario();
            $user->addAdmin($conexion,$email,$nombre,$apellido,$edad,$genero,$password);

            header('location: ../Vista/Administracion/superAdDashboard.php');
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
                $roll=$datos["roll"];
                $_SESSION['session']=$email;
                $_SESSION['name']=$nombre;
                if($roll==3){
                   header('location: ../Vista/pruebas/menu/Prueba.php');
                }elseif ($roll==2) {
                    header('location: ../Vista/Administracion/dashboard.php');
                }elseif ($roll==1) {
                    header('location: ../Vista/Administracion/superAdDashboard.php');
                }
            }else{
                echo "Datos incorrectos";
            }
        } 
        public function logout(){
            session_start();
            if(! isset($_SESSION['session'])){
                echo "no hay sesion iniciada...";                
                             
            }else{
                session_destroy();
                header('location: ../Vista/login.html'); 
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
        public function actualizarAdmin(){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $email=$conexion->real_escape_string(strip_tags($_POST['email']));
            $nombre=$conexion->real_escape_string(strip_tags($_POST['nombre']));
            $apellido=$conexion->real_escape_string(strip_tags($_POST['apellido']));
            $edad=$conexion->real_escape_string(strip_tags($_POST['edad']));
            $genero=$conexion->real_escape_string(strip_tags($_POST['genero']));                       

            $user=new Usuario();
            $user->updateAdmin($conexion,$email,$nombre,$apellido,$edad,$genero);

            header('location: ../Vista/Administracion/superAdDashboard.php');
        }
        public function delete(){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$_GET["email"];
 
            $user=new Usuario();
            $user->deleteUser($conexion,$email);
            
            header('location: ../Vista/Administracion/dashboard.php');

        }   
        public function deleteAdmin(){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$_GET["email"];
 
            $user=new Usuario();
            $user->deleteUser($conexion,$email);
            
            header('location: ../Vista/Administracion/superAdDashboard.php');

        }      
        
    }

    $metodo=$_GET['value'];
    $metodo=array('UsuarioC',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }
?>