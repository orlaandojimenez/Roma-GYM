<?php
require_once 'banner.php';
require_once 'session_valid.php';
?>
<script src="jquery-1.11.2.min.js"></script>
<script>
	$('#btncancelar').hide();
		$('#btnactualizar').hide();
		
	function guardarempleado(){
	var nombre=	$('#nombre').val();
	var apellido= $('#apellido').val();
	var puesto= $('#puesto').val();
	var telefono= $('#telefono').val();
	var direccion= $('#direccion').val();
	var rfc= $('#rfc').val();
	
	
	//alert(nombre+apellido+puesto+telefono+direccion+rfc);
	$.post("save_empleados.php",{nombre:nombre, apellido:apellido, puesto:puesto, telefono:telefono, direccion:direccion, rfc:rfc},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	function eliminar(id){
		//alert(id);
		$.post("del_empleado.php",{id:id},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	
	
	function actualizar(){
	var id=$("#id").val();
	var nombre=	$('#nombre').val();
	var apellido= $('#apellido').val();
	var puesto= $('#puesto').val();
	var telefono= $('#telefono').val();
	var direccion= $('#direccion').val();
	var rfc= $('#rfc').val();
	
	
	//alert(id+nombre+apellido+puesto+telefono+direccion+rfc);
	
		$('#nombre').val('');
		$('#apellido').val('');
		$('#puesto').val('');
		$('#telefono').val('');
		$('#direccion').val('');
		$('#rfc').val('');
		
		
		$.post("actualiza_empleado.php",
		{id:id, nombre:nombre, apellido:apellido, puesto:puesto, telefono:telefono, direccion:direccion, rfc:rfc},
		function(data){
			//alert(data);
			$("#reporte").html(data);
		});
		}
	
	function cancelar(){
		
		$('#nombre').val('');
		$('#apellido').val('');
		$('#puesto').val('');
		$('#telefono').val('');
		$('#direccion').val('');
		$('#rfc').val('');
		
		$('#btngrabar').show();
		$('#btncancelar').hide();
		$('#btnactualizar').hide();
	}
	
	function mostrar(id){
		$.post("consulta_empleado.php",{id:id}, function(data){
			//alert(data);
			var datos=data;
			var datos_array=datos.split("|");
			$('#nombre').val(datos_array[1]);
			$('#apellido').val(datos_array[2]);
			$('#puesto').val(datos_array[3]);
			$('#telefono').val(datos_array[4]);
			$('#direccion').val(datos_array[5]);
			$('#rfc').val(datos_array[6]);
			
			$('#id').val(id);

			
			$('#btngrabar').hide();
			$('#btncancelar').show();
			$('#btnactualizar').show();
		});
	}
	
</script>
<div align="center" class="jumbotron">
	<div align="right"><script type="text/javascript" src="ajax_empleado.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	Buscar <input type="text" placeholder="ID, Nombre, Apellido" id="bus" name="bus" onkeyup="loadXMLDoc()" required />
	</div>
	
	<div id="myDiv"></div>
	<table>
		<h2 class="red">REGISTRAR EMPLEADO</h2>
		<input type="hidden" id="id"  name="id"/>
		<tr>
			<td>Nombre</td>
			<td><input type="text" id="nombre" name="nombre"/></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input type="text" id="apellido" name="apellido"/></td>
		</tr>
		<tr>
			<td>Puesto</td>
			<td><input type="text" id="puesto" name="puesto"/></td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><input type="text" id="direccion" name="direccion"/></td>
		</tr>
		<tr>
			<td>Telefono</td>
			<td><input type="text" id="telefono" name="telefono"/></td>
		</tr>
		<tr>
			<td>RFC</td>
			<td><input type="text" id="rfc" name="rfc"/></td>
	</table>
	
	<tr>
		<td colspan="2" align="center">
			<button class="btn-success" id="btngrabar" onclick="guardarempleado();">Guardar</button>
			<button class="btn-info" id="btnactualizar" onclick="actualizar();">Actualizar</button>
			<button class="btn-danger" id="btncancelar" onclick="cancelar();">Cancelar</button>
						

		</td>
	</tr>
	</div>
	<div id="reporte" align="center" class="jumbotron">
<?php
require_once 'rep_empleados.php';
?>
</div>