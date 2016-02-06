<?php
    include_once ("../../Controlador/permisosAdmins.php");
    session_start();
    $permiso=new PermisosAdmins();    
    if($permiso->verificarAdmin()){    
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gráficas</title>
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
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"></a>
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
                                    <a href="menuGraficas.php">Gráficas</a> 
                                    <a href="tiempoUsuarios.php">Tiempos de las pruebas</a>                                   
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
           <strong>Gráficas</strong>  
        </div>
          <div class="graph_box">
      <div class="col-md-4 grid_2"><div class="grid_1">
        <a href="graphByStudent.php"><h3>Estudiantes</h3></a>
        <canvas id="doughnut" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
      </div></div>
      <div class="col-md-4 grid_2"><div class="grid_1">
        <a href="graficaCurso.php"><h3>Curso</h3>
        <canvas id="line" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
      </div></div>
      <div class="col-md-4 grid_2"><div class="grid_1">
        <a href="graficaGenero.php"><h3>Sexo</h3></a>
        <canvas id="polarArea" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
      </div></div>
      <div class="clearfix"> </div>
      </div>
      <div class="graph_box1">
      <div class="col-md-4 grid_2"><div class="grid_1">
        <a href="graficaEdad.php"><h3>Edad</h3>
        <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
      </div></div>
      <div class="col-md-4 grid_2"><div class="grid_1">
      <!--  <h3>Pie</h3>-->
        <canvas id="pie" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
      </div></div>
      <div class="col-md-4 grid_2"><div class="grid_1">
       <!-- <h3>Radar</h3>--><canvas id="radar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
      </div></div>
      <div class="clearfix"> </div>
    </div>
    <script>

    var doughnutData = [
        {
          value: 30,
          color:"#ef553a"
        },
        {
          value : 50,
          color : "#9358ac"
        },
        {
          value : 100,
          color : "#3b5998"
        },
        {
          value : 40,
          color : "#00aced"
        },
        {
          value : 120,
          color : "#4D5360"
        }
      
      ];
    var lineChartData = {
      labels : ["","","","","","",""],
      datasets : [
        {
          fillColor : "#00aced",
          strokeColor : "#00aced",
          pointColor : "#00aced",
          pointStrokeColor : "#fff",
          data : [65,59,90,81,56,55,40]
        },
        {
          fillColor : "#3b5998",
          strokeColor : "#3b5998",
          pointColor : "#3b5998",
          pointStrokeColor : "#fff",
          data : [28,48,40,19,96,27,100]
        }
      ]
      
    };
    var pieData = [
        {
          value: 30,
          color:"#ef553a"
        },
        {
          value : 50,
          color : "#00aced"
        },
        {
          value : 100,
          color : "#69D2E7"
        }
      
      ];
    var barChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [65,59,90,81,56,55,40]
        },
        {
          fillColor : "#00aced",
          strokeColor : "#00aced",
          data : [28,48,40,19,96,27,100]
        }
      ]
      
    };
  var chartData = [
      {
        value : Math.random(),
        color: "#D97041"
      },
      {
        value : Math.random(),
        color: "#C7604C"
      },
      {
        value : Math.random(),
        color: "#21323D"
      },
      {
        value : Math.random(),
        color: "#9D9B7F"
      },
      {
        value : Math.random(),
        color: "#7D4F6D"
      },
      {
        value : Math.random(),
        color: "#9358ac"
      }
    ];
    var radarChartData = {
      labels : ["","","","","","",""],
      datasets : [
        {
          fillColor : "#3b5998",
          strokeColor : "#3b5998",
          pointColor : "#3b5998",
          pointStrokeColor : "#fff",
          data : [65,59,90,81,56,55,40]
        },
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          pointColor : "#ef553a",
          pointStrokeColor : "#fff",
          data : [28,48,40,19,96,27,100]
        }
      ]
      
    };
  new Chart(document.getElementById("doughnut").getContext("2d")).Line(lineChartData);
  new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
  //new Chart(document.getElementById("radar").getContext("2d")).Line(lineChartData);
  new Chart(document.getElementById("polarArea").getContext("2d")).Line(lineChartData);
  new Chart(document.getElementById("bar").getContext("2d")).Line(lineChartData);
  //new Chart(document.getElementById("pie").getContext("2d")).Line(lineChartData);
  
  </script>
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