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
               <option value="1">Atención</option> 
               <option value="2">Matematicas</option>
               <option value="3">Memoria</option> 
           </select>                     
    </div>
		<div style="width:100%">
            <div style="text-align:center;"><img src="imagenes/leyEdad.svg"></div>
			<div style="margin: 0 auto; width:800px;" id="divContGr">
				<canvas id="canvas" height="600" width="800" style="margin 0 auto;"></canvas>
			</div>
		</div>
        
	<script>
        var datos=[];
        var grado=[];
        var atencion=new Array(new Array());
        var memoria=new Array(new Array());
        var matematicas=new Array(new Array());
        var mostrarr;
        var lineChartData;
        
	    $(document).ready(mostrar()); 
        
	    function mostrar(){	    	
        	    	  
      var semana=$("#semana").val();
                  $.ajax({
                    url:'../../Controlador/graficar.php?value=edad',
                    data:{semana:semana},
                    type: 'post',
                    success: function (data){
                        alert(data);
                        atencion=new Array();
                        memoria=new Array();
                        matematicas=new Array();
                        datos=JSON.parse(data);
                        var k=0;
                        
                        for(var i in datos){
                            atencion[k]=new Array();
                            memoria[k]=new Array();
                            matematicas[k]=new Array();
                            for(var j=0;j<datos[i].length;j++){
                                if(datos[i][j].memoria!=null){
                                    memoria[k].push(datos[i][j].memoria);
                                }
                                
                                if(datos[i][j].atencion!=null){
                                    atencion[k].push(datos[i][j].atencion);
                                }
                                
                                if(datos[i][j].matematicas!=null){
                                    matematicas[k].push(datos[i][j].matematicas);
                                }
                                
                            }
                            k++;
                        }  
                        pruebaG();
                     }
                   }
                )	    	
	    	
	    }
        
        
	    //atent();
        function atent(){
            window.alert('');
        }
        
        function pruebaG(){
            var p=$("#pruebaG").val();
            
            
            if(p==1){
                mostrarr=atencion
            }
            
            if(p==2){
                mostrarr=matematicas;
            }
            
            if(p==3){
                mostrarr=memoria;
            }
           
            establecerVec();
            ggg();
        }
        
        function establecerVec(){
            
            lineChartData = {
			labels : ["Dia 1","Dia 2","Dia 3","Dia 4","Dia 5"],
			datasets : [
				{
					label: "11 Años",
					fillColor : "rgba(0,0,255,0.4)",
					strokeColor : "rgba(0,0,255,1)",
					pointColor : "rgba(0,0,255,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[0]
				},
                {
					label: "12 Años",
					fillColor : "rgba(0,145,255,0.4)",
					strokeColor : "rgba(0,145,255,1)",
					pointColor : "rgba(0,145,255,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[1]
				},
                {
					label: "13 Años",
					fillColor : "rgba(0,207,255,0.4)",
					strokeColor : "rgba(0,207,255,1)",
					pointColor : "rgba(0,207,255,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[2]
				},
                {
					label: "14 Años",
					fillColor : "rgba(0,255,213,0.4)",
					strokeColor : "rgba(0,255,213,1)",
					pointColor : "rgba(0,255,213,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[3]
				},
                {
					label: "15 Años",
					label: "Decimo",
					fillColor : "rgba(0,255,128,0.4)",
					strokeColor : "rgba(0,255,128,1)",
					pointColor : "rgba(0,255,128,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[4]
				},
                {
					label: "16 Años",
					fillColor : "rgba(13,255,0,0.4)",
					strokeColor : "rgba(13,255,0,1)",
					pointColor : "rgba(13,255,0,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[5]
				},
                {
					label: "17 Años",
					fillColor : "rgba(204,255,0,0.4)",
					strokeColor : "rgba(204,255,0,1)",
					pointColor : "rgba(204,255,0,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[6]
				},
                {
					label: "18 Años",
					fillColor : "rgba(255,230,0,0.4)",
					strokeColor : "rgba(255,230,0,1)",
					pointColor : "rgba(255,230,0,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[7]
				},
                {
					label: "19 Años",
					fillColor : "rgba(255,153,0,0.4)",
					strokeColor : "rgba(255,153,0,1)",
					pointColor : "rgba(255,153,0,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : mostrarr[8]
				}
                
			]

		  }
            
        }
        
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