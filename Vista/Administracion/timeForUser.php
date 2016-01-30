<?php
    include_once ("../../Controlador/permisosAdmins.php");
    session_start();
    $permiso=new PermisosAdmins();    
    if($permiso->verificarAdmin()){    
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Administrador</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <!-- Bootstrap Core CSS -->
 <link href="vistaAdmin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
 <link href="vistaAdmin/css/style.css" rel="stylesheet" type="text/css">
 <link href="vistaAdmin/css/font-awesome.css" rel="stylesheet" type="text/css">
 <link href="vistaAdmin/css/tablas.css" rel="stylesheet" type="text/css">
<!-- jQuery -->
<script language="Javascript" type="text/javascript" src="vista/js/mem1/func1-2.js"></script>
<script language="Javascript" type="text/javascript" src="vistaAdmin/js/jquery.min.js"></script>
<script language="Javascript" type="text/javascript" src="vistaAdmin/js/Chart.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/administrador">Neuroentrenamiento</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Cuenta</strong>						
						
						<li class="divider"></li>
						<li class="m_2"><a href="../../Controlador/userController.php?value=logout"><i class="fa fa-lock"></i>Cerrar Sesión</a></li>	
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Resultados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/tipo">Gráficas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">  
           <strong>Tiempo en las preubas</strong>  
        </div>
             <?php 
               include_once ("../../Controlador/usuariosAdmin.php");
                $usuario=new UsuariosAdmin();                 
                $email=mysql_real_escape_string(strip_tags($_GET["email"]));
                $datos=$usuario->getUserByEmail($email);
                foreach ($datos as $dato) {
                  $nombre=utf8_encode($dato['nombre']);
                  $apellido=utf8_encode($dato['apellido']);
                  $edad=$dato['edad'];
                  $genero=$dato['genero'];
                  $curso=$dato['grado'];                  
                }
                $resultados=$usuario->getTimes($email);
                $datos=$resultados->fetch_all(MYSQLI_ASSOC);                
             ?>        
          <div>
            <label>Nombre: </label>
            <label><?php echo  utf8_encode($nombre); ?> </label><br><br>
            <label>Apellido:  </label>
            <label><?php echo  utf8_encode($apellido); ?></label><br><br>
            <label>Edad: </label>
            <label><?php echo $edad ?></label><br><br>                                  
            <label>Curso: </label>
            <label><?php echo $curso ?></label><br><br>                                                       
          </div><br><br>
          <div>
            <a href="tiempoUsuarios.php">Volver</a>
            <table class="table">
                <thead>                    
                    <th>Prueba</th>
                    <th>Dia</th>
                    <th>Semana</th>
                    <th>Tiempo (min:seg)</th>
                    <th>Puntuacion</th>
                </thead>
                <tbody><?php
                          foreach ($datos as $dato) {?>
                                <td><?php echo $dato['prueba_tipo'] ?></td>
                                <td><?php echo $dato['dia'] ?></td>
                                <td><?php echo $dato['semana'] ?></td>
                                <td><?php echo $dato['tiempo'] ?></td>
                                <td><?php echo $dato['puntaje_usuario'] ?></td>
                </tbody>
                        <?php  
                            }                    
                        ?>
                
            </table>
          </div>          

    <!-- /#wrapper -->
    <!-- Nav CSS -->
<link href="vistaAdmin/css/custom.css" rel="stylesheet" type="text/css">
<!-- Metis Menu Plugin JavaScript -->
<script language="Javascript" type="text/javascript" src="vistaAdmin/js/metisMenu.min.js"></script>
<script language="Javascript" type="text/javascript" src="vistaAdmin/js/custom.js"></script>
<script language="Javascript" type="text/javascript" src="vistaAdmin/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>