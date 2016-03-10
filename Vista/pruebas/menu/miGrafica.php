<?php
    include_once ("../../../Controlador/permisos.php");
    session_start();
    $permiso=new Permisos();    
    if($permiso->verificarUser()){    
?>
<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
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
           <select id="semana" onchange="mostrar();">
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
                    default: 
                      ?><option value="1">Semana 1</option>                                    
                        <option value="2">Semana 2</option>
                        <option value="3">Semana 3</option>
                        <option value="4">Semana 4</option>
                     <?php                          
                }
            ?>                           
           </select>

           <a href="prueba.php">Vover</a> 
                      
    </div>
		<div style="width:100%">
            <div style="text-align:center;"><img src="../../Administracion/imagenes/leyUsuario.svg"></div>
			<div style="margin: 0 auto; width:800px;" id="divContGr">
				<canvas id="canvas" height="600" width="800" style="margin 0 auto;"></canvas>
			</div>
		</div>                      
	<script>
        var atencion=[];
        var memoria=[];
        var matematicas=[];
        var lineChartData;
        
        
	    $(document).ready(mostrar()); 
	    function mostrar(){
            matematicas=[];
            memoria=[];
            atencion=[];
        /*hay un controlador que se llama graficar.php que lo que se hizo fue adaptar lo que se hizo en laravel y así
        poder hacer las consultas necesarias para graficar. en este caso lo que se quiere hacer es en el select de arriba 
        al hacer el cambio que se dirija a esta funcion que sera la encargada de gráficar.  
	    */	    
	    var semana=$("#semana").val();
                  $.ajax({
                    url:'../../../Controlador/graficar.php?value=semana&email=<?php echo urlencode($email);?>',
                    data:{semana:semana},
                    type: 'post',
                    success: function (data){  
                        alert(data);
                        datos=JSON.parse(data);        
                        for(var i=0;i<datos.length;i++){
                            atencion.push(datos[i].atencion);
                            memoria.push(datos[i].memoria);
                            matematicas.push(datos[i].matematicas);
                        }                        
                        asigVar();
                        gr();
                    }
                   }
                )
	    }
	    
        function asigVar(){
            lineChartData = {
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
        }

	function gr(){
        //alert('');
        $('#canvas').remove(); // this is my <canvas> element
        $('#divContGr').append('<canvas id="canvas" height="600" width="800" style="margin 0 auto;"></canvas>');
        
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
