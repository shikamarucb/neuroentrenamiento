<?php
    include_once ("../../Controlador/permisosAdmins.php");
    session_start();
    $permiso=new PermisosAdmins();    
    if($permiso->verificarAdmin()){    
?>
<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
		<script src="vistaAdmin/js/jquery.min.js"></script>
		<script src="vistaAdmin/js/Chart.js"></script>
	</head>
	<body>   
    <div>                       
           <select id="semana" onchange="mostrar();">
              <option value="1">Semana 1</option> 
              <option value="2">Semana 2</option>
              <option value="3">Semana 3</option>
              <option value="4">Semana 4</option>                                      
           </select>                     
    </div>
		<div style="width:100%">
			<div style="margin: 0 auto; width:800px;">
				<canvas id="canvas" height="600" width="800" style="margin 0 auto;"></canvas>
			</div>
		</div>                      
	<script>
        
	    $(document).ready(mostrar()); 
	    function mostrar(){	    	
        	    	  
      var semana=$("#semana").val();
                  $.ajax({
                    url:'../../Controlador/graficar.php?value=sexo',
                    data:{semana:semana},
                    type: 'post',
                    success: function (data){  
                        alert(data);                       
                     }
                   }
                )	    	
	    	
	    }
	    atent();
        function atent(){
            window.alert('');
        }
		//var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : ["Dia 1","Dia 2","Dia 3","Dia 4","Dia 5"],
			datasets : [
				{
					label: "Memoria",
					fillColor : "rgba(13,255,0,0.2)",
					strokeColor : "rgba(13,255,0,1)",
					pointColor : "rgba(13,255,0,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : memoria
				},
				{
					label: "Atencion",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : atencion
				},
                {
					label: "Matematicas",
					fillColor : "rgba(13,255,0,0.2)",
					strokeColor : "rgba(13,255,0,0.2)",
					pointColor : "rgba(13,255,0,0.2)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : matematicas
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
<?php
}
?>
