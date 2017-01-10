<?php
require_once 'banner.php';
require_once 'session_valid.php';
?>
<script src="jquery-1.11.2.min.js"></script>
<script>
	$('#btncancelar').hide();
		$('#btnactualizar').hide();
		
	function guardarusuario(){
	
	var usuario= $('#usuario').val();
	var pwd= $('#pwd').val();
	var nombre=	$('#nombre').val();
	var apellido= $('#apellido').val();
	var email= $('#email').val();
	
	
	//alert(usuario+pwd+nombre+apellido+email);
	$.post("save_usuarios.php",{usuario:usuario, pwd:pwd, nombre:nombre, apellido:apellido, email:email},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	function eliminar(id){
		//alert(id);
		$.post("del_usuario.php",{id:id},
	function(data){
		$("#reporte").html(data);
	});
	}
	
	
	
	function actualizar(){
	var id=$("#id").val();
	var usuario= $('#usuario').val();
	var pwd= $('#pwd').val();
	var nombre=	$('#nombre').val();
	var apellido= $('#apellido').val();
	var email= $('#email').val();
	
	
	//alert(id+usuario+pwd+nombre+apellido+email);
	
		$('#usuario').val('');
		$('#pwd').val('');
		$('#nombre').val('');
		$('#apellido').val('');
		$('#email').val('');
		
		
		$.post("actualiza_usuario.php",
		{id:id, usuario:usuario, pwd:pwd, nombre:nombre, apellido:apellido, email:email},
		function(data){
			//alert(data);
			$("#reporte").html(data);
		});
		}
	
	function cancelar(){
		
		$('#usuario').val('');
		$('#pwd').val('');
		$('#nombre').val('');
		$('#apellido').val('');
		$('#email').val('');
		
		$('#btngrabar').show();
		$('#btncancelar').hide();
		$('#btnactualizar').hide();
	}
	
	function mostrar(id){
		$.post("consulta_usuario.php",{id:id}, function(data){
			//alert(data);
			var datos=data;
			var datos_array=datos.split("|");
			$('#usuario').val(datos_array[1]);
			$('#pwd').val(datos_array[2]);
			$('#nombre').val(datos_array[3]);
			$('#apellido').val(datos_array[4]);
			$('#email').val(datos_array[5]);
			
			
			$('#id').val(id);

			
			$('#btngrabar').hide();
			$('#btncancelar').show();
			$('#btnactualizar').show();
		});
	}
	
</script>
<div align="center" class="jumbotron">
	<div align="right"><script type="text/javascript" src="ajax_usuario.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	Buscar <input type="text" placeholder="ID,Usuario,Nombre,Apellido" id="bus" name="bus" onkeyup="loadXMLDoc()" required />
	</div>
	
	<div id="myDiv"></div>
	<table>
		<h2 class="red">REGISTRAR USUARIO</h2>
		<input type="hidden" id="id"  name="id"/>
		<tr>
			<td>Usuario</td>
			<td><input type="text" id="usuario" name="usuario"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" id="pwd" name="pwd"/></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" id="nombre" name="nombre"/></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input type="text" id="apellido" name="apellido"/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" id="email" name="email"/></td>
			</tr>
	</table>
	
	<tr>
		<td colspan="2" align="center">
			<button class="btn-success" id="btngrabar" onclick="guardarusuario();">Guardar</button>
			<button class="btn-info" id="btnactualizar" onclick="actualizar();">Actualizar</button>
			<button class="btn-danger" id="btncancelar" onclick="cancelar();">Cancelar</button>

		</td>
	</tr>
	</div>
<div id="reporte" align="center" class="jumbotron">
<?php
require_once 'rep_usuarios.php';
?>
</div>