<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
		<script src="vistaAdmin/js/jquery.min.js"></script>
		<script src="vistaAdmin/js/Chart.js"></script>
	</head>
	<body>

    <div>
        <?php
          include_once ("../../Controlador/usuariosAdmin.php");
          $usuarios=new UsuariosAdmin();
          $email=$_GET["email"];
          $info=$usuarios->getControl($email);
          $resultado=$info->fetch_array(MYSQLI_ASSOC);
          $semana=$resultado['semana_usuario'];          
       ?>                     
           <select name="semana" onchange="mostrar(this.value);">
            <?php
                switch ($semana) {
                  case '1':
                     ?> <option value="1">Semana 1</option>
                     <?php 
                    break;
                  case '2':
                     ?> <option value="1">Semana 1</option>                                    
                        <option value="2">Semana 2</option>                                    
                     <?php 
                    break;
                  case '3':
                     ?> <option value="1">Semana 1</option>                                    
                        <option value="2">Semana 2</option>
                        <option value="3">Semana 3</option>                                    
                     <?php 
                    break;
                  case '4':
                     ?> <option value="1">Semana 1</option>                                    
                        <option value="2">Semana 2</option>
                        <option value="3">Semana 3</option>
                        <option value="4">Semana 4</option>
                     <?php 
                    break;                         
                }
            ?>                           
           </select>             
    </div>
		<div style="width:30%">
			<div>
				<canvas id="canvas" height="450" width="600"></canvas>
			</div>
		</div>                      
	<script>
	    $(document).ready(mostrar(1)); 
	    function mostrar(semana){
        /*hay un controlador que se llama graficar.php que lo que se hizo fue adaptar lo que se hizo en laravel y así
        poder hacer las consultas necesarias para graficar. en este caso lo que se quiere hacer es en el select de arriba 
        al hacer el cambio que se dirija a esta funcion que sera la encargada de gráficar.  
	    	*/
	    }
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				}
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}
	</script>
	</body>
</html>
