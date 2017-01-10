<?php
require_once 'lib.php';
require_once 'banner.php';
require_once 'session_valid.php';
$set1=consultarCliente();
?>
<script src="jquery-1.11.2.min.js"></script>
<script>
	$('#btncancelar').hide();
		$('#btnactualizar').hide();
		
	function guardar(){
	var id_cliente= $('#id_cliente').val();
	
	
	//alert(id_cliente);
	$.post("save_asistencia.php",{id_cliente:id_cliente},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	function eliminar(id){
		//alert(id);
		$.post("del_asistencia.php",{id:id},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	
	
	function actualizar(){
	var id=$("#id").val();
	var id_cliente= $('#id_cliente').val();
	
	
	//alert(id+id_clase+id_cliente);
	
		$('#id_cliente').val('');
		
		
		$.post("actualiza_asistencia.php",
		{id:id, id_cliente:id_cliente},
		function(data){
			//alert(data);
			$("#reporte").html(data);
		});
		}
	
	function cancelar(){
		
		$('#id_cliente').val('');
		
		$('#btngrabar').show();
		$('#btncancelar').hide();
		$('#btnactualizar').hide();
	}
	
	function mostrar(id){
		$.post("consulta_asistencia.php",{id:id}, function(data){
			//alert(data);
			var datos=data;
			var datos_array=datos.split("|");
			$('#id_cliente').val(datos_array[1]);
			
			$('#id').val(id);

			
			$('#btngrabar').hide();
			$('#btncancelar').show();
			$('#btnactualizar').show();
		});
	}
	
</script>
<div align="center" class="jumbotron">
	<div align="right"><script type="text/javascript" src="ajax_asistencia.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	Buscar <input type="text" placeholder="ID Cliente" id="bus" name="bus" onkeyup="loadXMLDoc()" required />
	</div>
	
	<div id="myDiv"></div>
	<table>
		<h2 class="red">REGISTRAR ASISTENCIA</h2>
		<input type="hidden" id="id"  name="id"/>
		<tr>
			<td>Cliente</td>
			<td><?php
			echo "<select id='id_cliente' name='id_cliente'>";
			foreach ($set1 as $key => $cliente) {
				echo "<option value ='{$cliente->id}'>{$cliente->nombre}</option>";
			}
			echo "</select>";
		?></td>
		</tr>
	
	</table>
	
	<tr>
		<td colspan="2" align="center">
			<button class="btn-success" id="btngrabar" onclick="guardar();">Guardar</button>
			<button class="btn-info" id="btnactualizar" onclick="actualizar();">Actualizar</button>
			<button class="btn-danger" id="btncancelar" onclick="cancelar();">Cancelar</button>
						

		</td>
	</tr>
	</div>
<div id="reporte" align="center" class="jumbotron">
<?php
require_once 'rep_asistencia.php';
?>
</div>