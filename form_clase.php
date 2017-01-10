<?php
require_once 'lib.php';
require_once 'banner.php';
require_once 'session_valid.php';
$set=consultarEmpleado();
?>
<script src="jquery-1.11.2.min.js"></script>
<script>
	$('#btncancelar').hide();
		$('#btnactualizar').hide();
		
	function guardarclase(){
	var nombre= $('#nombre').val();
	var descripcion= $('#descripcion').val();
	var fecha= $('#fecha').val();
	var id_empleado= $('#id_empleado').val();
	
	
	//alert(nombre+descripcion+fecha+id_empleado);
	$.post("save_clases.php",{nombre:nombre, descripcion:descripcion, fecha:fecha, id_empleado:id_empleado},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	function eliminar(id){
		//alert(id);
		$.post("del_clase.php",{id:id},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	
	
	function actualizar(){
	var id=$("#id").val();
	var nombre=	$('#nombre').val();
	var descripcion= $('#descripcion').val();
	var fecha= $('#fecha').val();
	var id_empleado= $('#id_empleado').val();
	
	
	//alert(id+nombre+descripcion+fecha+id_empleado);
	
		$('#nombre').val('');
		$('#descripcion').val('');
		$('#fecha').val('');
		$('#id_empleado').val('');
		
		
		$.post("actualiza_clase.php",
		{id:id, nombre:nombre, descripcion:descripcion, fecha:fecha, id_empleado:id_empleado},
		function(data){
			//alert(data);
			$("#reporte").html(data);
		});
		}
	
	function cancelar(){
		
		$('#nombre').val('');
		$('#descripcion').val('');
		$('#fecha').val('');
		$('#id_empleado').val('');
		
		$('#btngrabar').show();
		$('#btncancelar').hide();
		$('#btnactualizar').hide();
	}
	
	function mostrar(id){
		$.post("consulta_clase.php",{id:id}, function(data){
			//alert(data);
			var datos=data;
			var datos_array=datos.split("|");
			$('#nombre').val(datos_array[1]);
			$('#descripcion').val(datos_array[2]);
			$('#fecha').val(datos_array[3]);
			$('#id_empleado').val(datos_array[4]);
			
			$('#id').val(id);

			
			$('#btngrabar').hide();
			$('#btncancelar').show();
			$('#btnactualizar').show();
		});
	}
	
</script>
<div align="center" class="jumbotron">
	<div align="right"><script type="text/javascript" src="ajax_clase.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	Buscar <input type="text" placeholder="ID, Nombre" id="bus" name="bus" onkeyup="loadXMLDoc()" required />
	</div>
	
	<div id="myDiv"></div>
	<table>
		<h2 class="red">REGISTRAR CLASE</h2>
		<input type="hidden" id="id"  name="id"/>
		<tr>
			<td>Nombre</td>
			<td><input type="text" id="nombre" name="nombre"/></td>
		</tr>
		<tr>
			<td>Descripcion</td>
			<td><input type="text" id="descripcion" name="descripcion"/></td>
		</tr>
		<tr>
			<td>Fecha</td>
			<td><input type="date" id="fecha" name="fecha" /></td>
		</tr>
		<tr>
			<td>Empleado</td>
			<td><?php
			echo "<select id='id_empleado' name='id_empleado'>";
			foreach ($set as $key => $emp) {
				echo "<option value ='{$emp->id}'>{$emp->nombre}</option>";
			}
			echo "</select>";
		?></td>
		</tr>
		
	</table>
	
	<tr>
		<td colspan="2" align="center">
			<button class="btn-success" id="btngrabar" onclick="guardarclase();">Guardar</button>
			<button class="btn-info" id="btnactualizar" onclick="actualizar();">Actualizar</button>
			<button class="btn-danger" id="btncancelar" onclick="cancelar();">Cancelar</button>
		</td>
	</tr>
	</div>
<div id="reporte" align="center" class="jumbotron">
<?php

require_once 'rep_clases.php';
?>
</div>