<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/activacion.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");
    include_once ("../Modelo/resultado.php");

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

            $codigo=sha1(mt_rand().time().mt_rand().$_SERVER['REMOTE_ADDR']);//se genera un codigo aleatorio para enviar
                                                                             //por correo para verificar y activar la cuenta 
            $user=new Usuario();//se agrega el usuario a la bd 
            $user->addUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password);

            $control=new Control($email);//se agrega los respectivos datos a la tabla control  
            $control->addControl($conexion);

            $activar=new Activacion();//se agrega los respectivos datos a la tabla activacion
            $activar->add($conexion, $email, $codigo);  
            //se agrega el link que ayudara a la activación de la cuenta
            $contenido = 'Hola, para activar tu cuenta copia el siguiente link en la barra de direcciones de tu navegador:
                    '."\n".'
                   localhost:8080/neuroentrenamiento/Controlador/userController.php?value=activar&email='.urlencode($email).'&code='.$codigo;

            mail($email, "Por favor activa tu cuenta", $contenido);//se envia el correo para que pueda ser activada la cuenta

            header("location: ../Vista/pruebas/msg/registermsg.html");
        }
        public function activar(){// funcion para activar la cuenta registrada.
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $codigo=$conexion->real_escape_string(strip_tags($_GET['code']));
            $email=$conexion->real_escape_string(strip_tags($_GET['email']));
            $activar=new Activacion();
            $resultado=$activar->getActive($conexion, $email, $codigo);//se comprueba que el codigo de activacion enviado
            if($resultado->num_rows != 0){                             //corresponda al almacenado den la base de datos
                $user=new Usuario();
                $user->activarUsuario($conexion, $email);//se activa el usuario
                header('location: ../Vista/login.html');

            }else{
                echo "Ha ocurrido un problema con el codigo de activacion; por favor intentalo de nuevo..";
            }

        }
        public function registrarAdmin(){//funcion para registrar los nuevos administradores.Lo registra unicamente el superadministrador.. 
            
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
        
        public function loguear(){//funcion parq ue loguee cualquiera de los rolles que desee ingresar. 
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
                //echo "Datos incorrectos o ingresa a tu correo y activa tu cuenta ";
                header ("Location: ../Vista/pruebas/msg/errormsg.html");
            }
        }

        public function enviaRecuperar(){//funcion que envia el correo para poder resuperar contraseña
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$conexion->real_escape_string(strip_tags($_POST['email']));

            $user=new Usuario();
            $resultado=$user->getUsersByEmail($conexion,$email);
            if($resultado->num_rows != 0){
                $contenido = 'Hola, para restablecer tu contraseña haz click en el siguiente link:
                    '."\n".'
                    <a href="localhost:8080/neuroentrenamiento/Vista/formPassword.php?email='.urlencode($email).'">localhost:8080/neuroentrenamiento/Vista/formPassword.php?email='.urlencode($email).'</a>
                    O copia el siguiente link en la barra de direcciones de tu navegador:
                    '."\n".'
                   localhost:8080/neuroentrenamiento/Vista/formPassword.php?email='.urlencode($email);

            mail($email, "Restablecer tu contraseña", $contenido);
            header ("Location: ../Vista/login.html");

            } else{
                //echo "Este correo aún no esta registrado...";
                header ("Location: ../Vista/pruebas/msg/existmsg.html");
            }        
        } 

        public function restablecer(){//se reciben los datos y se realiza la actulizacion de la contraseña 
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$conexion->real_escape_string(strip_tags($_POST['email']));    
            $password=$conexion->real_escape_string(strip_tags($_POST['password']));
            $user=new Usuario();
            $user->updPassword($conexion, $email, $password);

            $contenido="Tu contraseña ha sido restablecida con éxito";
            mail($email, "Contraseña Restablecida", $contenido);

            header('location: ../Vista/login.html');
        }

        public function logout(){//cierra y destruye la sesion. 
            session_start();
            if(! isset($_SESSION['session'])){
                echo "no hay sesion iniciada...";                
                             
            }else{
                session_destroy();
                header('location: ../Vista/login.html'); 
            }            
        }      
        
        public function contactar(){//mediante el formulario de contacto se envia al correo del superadministrador. 
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $destino="neurocartilla@gmail.com";
            $nombre=$conexion->real_escape_string(strip_tags($_POST['nombre']));
            $email=$conexion->real_escape_string(strip_tags($_POST['email']));
            $asunto=$conexion->real_escape_string(strip_tags($_POST['asunto']));
            $mensaje=$conexion->real_escape_string(strip_tags($_POST['mensaje']));

            $contenido="Nombre:  ".$nombre."\nCorreo:  ".$email."\nMensaje:  ".$mensaje;
            mail($destino, $asunto, $contenido); 
             header ("Location: ../Vista/pruebas/msg/contactmsg.html");
        }

        public function actualizar(){//se utiliza para actualizar los datos de los usuarios atravez del panel de administración.
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
        public function actualizarAdmin(){//se utiliza para actualizar los datos de los usuarios atravez del panel de superadministración.
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
        public function delete(){//se utiliza para borrar los usuarios de todas las tablas  ya sea por incatividad o por que el administrador así lo desea. 
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$conexion->real_escape_string(strip_tags($_GET["email"]));
 
            $user=new Usuario();
            $user->deleteUser($conexion,$email);

            $user=new Activacion();
            $user->deleteActive($conexion, $email);

            $user=new Control($email);
            $user->deleteControl($conexion);

            $user=new Resultado();
            $user->deleteResult($conexion, $email);
            
            header('location: ../Vista/Administracion/dashboard.php');

        }   
        public function deleteAdmin(){//funcion que es invocada por el superadmin para eliminar administradores. 
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$conexion->real_escape_string(strip_tags($_GET["email"]));
 
            $user=new Usuario();
            $user->deleteUser($conexion,$email);
            
            header('location: ../Vista/Administracion/superAdDashboard.php');

        }      
        
    }
    //AL LLAMAR EL CONTROLADOR SE ENVIA POR METODO GET EL NOMBRE DE LA FUNCION A INVOCAR, SE RECIBE Y SI EXISTE SE INVOCA DESDE ESTA SECCION DE CODIGO. 
    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $metodo=$conexion->real_escape_string(strip_tags($_GET['value']));
    $metodo=array('UsuarioC',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);    
    }
?>