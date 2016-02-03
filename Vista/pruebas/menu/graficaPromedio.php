<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){    
?>
<!doctype html>
<html>
	<head>
		<title>Promedio</title>
		<script src="../../Administracion/vistaAdmin/js/jquery.min.js"></script>
		<script src="../../Administracion/vistaAdmin/js/Chart.js"></script>
	</head>
	<body>

    <div>
        <?php
          include_once ("../../../Controlador/datosControl.php");
          $usuarios=new DatosControl();
          $email=$_SESSION['session']; 
          $info=$usuarios->getControl($email);
          //$resultado=$info->fetch_array(MYSQLI_ASSOC);
          $semana=$info['semana_usuario'];          
       ?>                                    
        <a href="prueba.php">Vover</a> 
                      
    </div>
		<div style="width:100%">
            <div style="text-align:center;"><img src="../../Administracion/imagenes/leyUsuario.svg"></div>
			<div style="margin: 0 auto; width:800px;">
				<canvas id="canvas" height="600" width="800" style="margin 0 auto;"></canvas>
			</div>
		</div>                      
	<script>
        var atencion=[];
        var memoria=[];
        var matematicas=[];
	    $(document).ready(mostrar()); 
	    function mostrar(){	    	
        /*hay un controlador que se llama graficar.php que lo que se hizo fue adaptar lo que se hizo en laravel y así
        poder hacer las consultas necesarias para graficar. en este caso lo que se quiere hacer es en el select de arriba 
        al hacer el cambio que se dirija a esta funcion que sera la encargada de gráficar.  
	    */	    
	    var semana=$("#semana").val();
                  $.ajax({
                    url:'../../../Controlador/graficar.php?value=promedio&email=<?php echo urlencode($email);?>',                    
                    success: function (data){  
                    alert(data);                  	
                        datos=JSON.parse(data);
                        for(var i in datos){
                            
                            if(datos[i].atencion != null){
                                atencion.push(datos[i].atencion);}
                            if(datos[i].memoria != null){
                                memoria.push(datos[i].memoria);}
                            if(datos[i].matematicas != null){
                                matematicas.push(datos[i].matematicas);}
                        }
                        
                    }
                   }
                )	    	
	    	
	    }
	    atent();
        function atent(){
            window.alert('');
        }
        
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
					data : matematicas
				},
                {
					label: "Matematicas",
					fillColor : "rgba(13,255,0,0.2)",
					strokeColor : "rgba(13,255,0,0.2)",
					pointColor : "rgba(13,255,0,0.2)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : atencion
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