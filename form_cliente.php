<?php
require_once 'banner.php';
require_once 'session_valid.php';
require_once 'config.php'
?>
<script src="jquery-1.11.2.min.js"></script>
<script>
		$('#btncancelar').hide();
	$('#btnactualizar').hide();

	function guardarcliente(){
	var nombre=	$('#nombre').val();
	var apellido= $('#apellido').val();
	var edad= $('#edad').val();
	var telefono= $('#telefono').val();
	var direccion= $('#direccion').val();
	var email= $('#email').val();

	//alert(nombre+apellido+edad+telefono+direccion+email);
	$.post("save_clientes.php",{nombre:nombre, apellido:apellido, edad:edad, telefono:telefono, direccion:direccion, email:email},
	function(data){
	$("#reporte").html(data);
	});
	}

	function eliminar(id){
	//alert(id);
	$.post("del_cliente.php",{id:id},
	function(data){
	$("#reporte").html(data);
	});
	}

	function actualizar(){
	var id=$("#id").val();
	var nombre=	$('#nombre').val();
	var apellido= $('#apellido').val();
	var edad= $('#edad').val();
	var telefono= $('#telefono').val();
	var direccion= $('#direccion').val();
	var email= $('#email').val();

	//alert(id+nombre+apellido+edad+telefono+direccion+email);

	$('#nombre').val('');
	$('#apellido').val('');
	$('#edad').val('');
	$('#telefono').val('');
	$('#direccion').val('');
	$('#email').val('');

	$.post("actualiza_cliente.php",
	{id:id, nombre:nombre, apellido:apellido, edad:edad, telefono:telefono, direccion:direccion, email:email},
	function(data){
	//alert(data);
	$("#reporte").html(data);
	});
	}

	function cancelar(){

	$('#nombre').val('');
	$('#apellido').val('');
	$('#edad').val('');
	$('#telefono').val('');
	$('#direccion').val('');
	$('#email').val('');

	$('#btngrabar').show();
	$('#btncancelar').hide();
	$('#btnactualizar').hide();
	}

	function mostrar(id){
	$.post("consulta_cliente.php",{id:id}, function(data){
	//alert(data);
	var datos=data;
	var datos_array=datos.split("|");
	$('#nombre').val(datos_array[1]);
	$('#apellido').val(datos_array[2]);
	$('#edad').val(datos_array[3]);
	$('#telefono').val(datos_array[4]);
	$('#direccion').val(datos_array[5]);
	$('#email').val(datos_array[6]);

	$('#id').val(id);

	$('#btngrabar').hide();
	$('#btncancelar').show();
	$('#btnactualizar').show();
	});
	}

	
	</script>
	
	
<div align="center" class="jumbotron">
	<div align="right"><script type="text/javascript" src="ajax_cliente.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	Buscar <input type="text" placeholder="ID, Nombre, Apellido" id="bus" name="bus" onkeyup="loadXMLDoc()" required />
	</div>
	
	<div id="myDiv"></div>
	<table>
		<h2 class="red">REGISTRAR CLIENTE</h2>
		<input type="hidden" id="id"  name="id"/>
		<tr>
			<td>Nombre</td>
			<td>
			<input type="text" id="nombre" name="nombre"/>
			</td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td>
			<input type="text" id="apellido" name="apellido"/>
			</td>
		</tr>
		<tr>
			<td>Edad</td>
			<td>
			<input type="text" id="edad" name="edad"/>
			</td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td>
			<input type="text" id="direccion" name="direccion"/>
			</td>
		</tr>
		<tr>
			<td>Telefono</td>
			<td>
			<input type="text" id="telefono" name="telefono"/>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
			<input type="text" id="email" name="email"/>
			</td>
		</tr>

	</table>
	

	<tr>
		<td colspan="2" align="center">
		<button class="btn-success" id="btngrabar" onclick="guardarcliente();">
			Guardar
		</button>
		<button class="btn-info" id="btnactualizar" onclick="actualizar();">
			Actualizar
		</button>
		<button class="btn-danger" id="btncancelar" onclick="cancelar();">
			Cancelar
		</button></td>
	</tr>
</div>
<div id="reporte" align="center" class="jumbotron">
	<?php
	require_once 'rep_clientes.php';
	?>
