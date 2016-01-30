<?php
    include_once ("../../Controlador/permisosAdmins.php");
    session_start();
    $permiso=new PermisosAdmins();    
    if($permiso->verificarSuperAdmin()){    
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

<script language="Javascript" type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script language="Javascript" type="text/javascript" src="../js/passwords.js"></script>
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
                            <a href="superAdDashboard.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="regAdmin.php"><i class="fa fa-indent nav_icon"></i>Resgistrar Nuevo Administrador</a>
                            <a href="../../Controlador/backup.php"><i class="fa fa-indent nav_icon"></i>Generar Backup de la base de datos</a>                            
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
           <strong>Modificar Usuarios</strong>  
        </div>             
        <form name="registro" action="../../Controlador/userController.php?value=registrarAdmin" method="POST">
          <div>
            <label>Nombre</label>
            <input type="text"  name="nombre" required><br><br>
            <label>Apellido</label>
            <input type="text"  name="apellido" required><br><br>
            <label>Edad</label>
            <input type="number" min="11" max="99"  name="edad" required><br><br>
            <label>Genero</label>
            <select name="genero">
                <option value="M">M</option>
                <option value="F">F</option>                                                           
            </select><br>    
          </div>
          <div>                                                    
          </div><br><br>
          <label>Email</label>
          <input type="text"  name="email" required><br>
          <label>Contraseña</label>
          <input type="password"  name="password" required><br><br>
          <label>Repita la Contraseña</label>
          <input type="password"  name="password2" required><br><br>
          <button type="submit" onclick="return compara();" class="btn btn-primary">Registrar</button>
        </form>                   
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