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
        
    <div>                       
           <select id="pruebaG" onchange="pruebaG();">
              <option value="1">Matematicas</option> 
              <option value="2">Memoria</option>
              <option value="3">Atencion</option>
           </select>                     
    </div>
		<div style="width:100%">
			<div style="margin: 0 auto; width:800px;" id="divContGr">
				<canvas id="canvas" height="600" width="800" style="margin 0 auto;"></canvas>
			</div>
		</div>                      
	<script>
        var homb=[];
        var muj=[];
        var atencionH=[];
        var memoriaH=[];
        var matematicasH=[];
        var atencionM=[];
        var memoriaM=[];
        var matematicasM=[];
        var mostrarH=[];
        var mostrarM=[];
        var lineChartData;
        
	    $(document).ready(mostrar()); 
        
	    function mostrar(){
            atencionH=[];
            memoriaH=[];
            matematicasH=[];
            atencionM=[];
            memoriaM=[];
            matematicasM=[];
            mostrarH=[];
            mostrarM=[];  
        
          var semana=$("#semana").val();
                      $.ajax({
                        url:'../../Controlador/graficar.php?value=sexo',
                        data:{semana:semana},
                        type: 'post',
                        success: function (data){  
                            alert(data);
                            datos=JSON.parse(data);
                            
                            homb=datos.masculino;
                            muj=datos.femenino;
                            
                            for(var i=0;i<homb.length;i++){
                                
                                if(homb[i].atencion!=null){
                                    atencionH.push(homb[i].atencion);
                                }
                                
                                if(homb[i].memoria!=null){
                                    memoriaH.push(homb[i].memoria);
                                }
                                
                                if(homb[i].matematicas!=null){
                                    matematicasH.push(homb[i].matematicas);
                                }
                            }
                            
                            for(var i=0;i<muj.length;i++){
                                
                                if(muj[i].atencion!=null){
                                    atencionM.push(muj[i].atencion);
                                }
                                
                                if(muj[i].memoria!=null){
                                    memoriaM.push(muj[i].memoria);
                                }
                                
                                if(muj[i].matematicas!=null){
                                    matematicasM.push(muj[i].matematicas);
                                }
                            }
                         }
                       }
                    )

        }
        
        function pruebaG(){
                    
            
            
            var p=$("#pruebaG").val();
            
            if(p==1){
                mostrarH=matematicasH;
                mostrarM=matematicasM;
            }
            if(p==2){
                mostrarH=memoriaH;
                mostrarM=memoriaM;
            }
            if(p==3){
                mostrarH=atencionH;
                mostrarM=atencionM;
            }
            
            alert(mostrarH);
            establecerVec();
            ggg();
            
        }
        
	    
        function atent(){
            window.alert(homb);
        }
		//var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
        
        
        function establecerVec(){
        
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
					data : mostrarH
				},
				{
					label: "Atencion",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : mostrarM
				}
			]

		  }
            
        }
        
		/*var lineChartData = {
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
					data : mostrarH
				},
				{
					label: "Atencion",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : mostrarM
				}
			]

		}*/
    atent();

	function ggg(){
        
        $('#canvas').remove(); // this is my <canvas> element
        $('#divContGr').append('<canvas id="canvas" height="600" width="800" style="margin 0 auto;"></canvas>');

		var ctx = document.getElementById("canvas").getContext("2d");
        ctx.clearRect(0,0,canvas.width,canvas.height);
        
		var myLineChart = new Chart(ctx).Line(lineChartData, {
			pointDot : true,
		});
        
        
        
	}
	</script>
	</body>
</html>
<?php
}
?>
