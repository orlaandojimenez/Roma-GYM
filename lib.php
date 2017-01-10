<?php
require_once 'config.php';

function guardarCliente($nombre, $apellido, $edad, $telefono, $direccion, $email) {
	global $conn;
	//buscar variables fuera d ela funcion
	$actual = time();

	$query = "INSERT INTO cliente (id, nombre, apellido, edad, telefono, direccion, email, fecha_registro)" . "values (NULL, '$nombre', '$apellido', $edad, $telefono, '$direccion', '$email', '$actual')";

	//echo "<p> $query </p>";
	mysqli_query($conn, $query);
}

function guardarAsistencia($id_cliente) {
	global $conn;
	//buscar variables fuera d ela funcion
	$actual = time();

	$query = "INSERT INTO asistencia (id, id_cliente, fecha)" . "values (NULL, $id_cliente, $actual)";

	//echo "<p> $query </p>";
	mysqli_query($conn, $query);
}

function guardarEmpleado($nombre, $apellido, $puesto, $telefono, $direccion, $rfc) {
	global $conn;
	//buscar variables fuera d ela funcion

	$query = "INSERT INTO empleado (id, nombre, apellido, puesto, telefono, direccion, rfc)" . "values (NULL, '$nombre', '$apellido', '$puesto', $telefono, '$direccion', '$rfc')";

	//echo "<p> $query </p>";
	mysqli_query($conn, $query);
}

function guardarClase($nombre, $descripcion, $fes, $id_empleado) {
	global $conn;
	//buscar variables fuera d ela funcion

	$query = "INSERT INTO clase (id, nombre, descripcion, fecha, id_empleado)" . "values (NULL, '$nombre', '$descripcion', $fes, $id_empleado)";

	//echo "<p> $query </p>";
	mysqli_query($conn, $query);
}

function guardarClaseDetalle($id_clase, $id_cliente) {
	global $conn;
	//buscar variables fuera d ela funcion
	

	$query = "INSERT INTO detalle_clase (id, id_clase, id_cliente)" . "values (NULL, $id_clase, $id_cliente)";

	//echo "<p> $query </p>";
	mysqli_query($conn, $query);
}


function guardarUsuario($usuario, $pwd, $nombre, $apellido, $email) {
	global $conn;
	//buscar variables fuera d ela funcion

	$query = "INSERT INTO usuario (id, usuario, pwd, nombre, apellido, email)" . "values (NULL, '$usuario', '$pwd', '$nombre', '$apellido', '$email')";

	//echo "<p> $query </p>";
	mysqli_query($conn, $query);
}

function consultarCliente() {
	global $conn;
	$sql = "SELECT * FROM cliente";
	$data = array();
	if ($result = mysqli_query($conn, $sql)) {
		while ($obj = mysqli_fetch_object($result)) {
			$data[] = $obj;
		}
		mysqli_free_result($result);
		return $data;
	}
}

function consultarAsistencia() {
	global $conn;
	$sql = "SELECT * FROM asistencia";
	$data = array();
	if ($result = mysqli_query($conn, $sql)) {
		while ($obj = mysqli_fetch_object($result)) {
			$data[] = $obj;
		}
		mysqli_free_result($result);
		return $data;
	}
}

function consultarClase() {
	global $conn;
	$sql = "SELECT * FROM clase";
	$data = array();
	if ($result = mysqli_query($conn, $sql)) {
		while ($obj = mysqli_fetch_object($result)) {
			$data[] = $obj;
		}
		mysqli_free_result($result);
		return $data;
	}
}

function consultarClaseDetalle() {
	global $conn;
	$sql = "SELECT * FROM detalle_clase";
	$data = array();
	if ($result = mysqli_query($conn, $sql)) {
		while ($obj = mysqli_fetch_object($result)) {
			$data[] = $obj;
		}
		mysqli_free_result($result);
		return $data;
	}
}

function consultarEmpleado() {
	global $conn;
	$sql = "SELECT * FROM empleado";
	$data = array();
	if ($result = mysqli_query($conn, $sql)) {
		while ($obj = mysqli_fetch_object($result)) {
			$data[] = $obj;
		}
		mysqli_free_result($result);
		return $data;
	}
}

function consultarUsuario() {
	global $conn;
	$sql = "SELECT * FROM usuario";
	$data = array();
	if ($result = mysqli_query($conn, $sql)) {
		while ($obj = mysqli_fetch_object($result)) {
			$data[] = $obj;
		}
		mysqli_free_result($result);
		return $data;
	}
}

function borrarCliente($id){
	global $conn; //buscar variables fuera d ela funcion 
	
	
	$query="DELETE FROM cliente WHERE id={$id}";
		   
   //echo "<p> $query </p>";
 mysqli_query($conn, $query);
}

function borrarAsistencia($id){
	global $conn; //buscar variables fuera d ela funcion 
	
	
	$query="DELETE FROM asistencia WHERE id={$id}";
		   
   //echo "<p> $query </p>";
 mysqli_query($conn, $query);
}

function borrarEmpleado($id){
	global $conn; //buscar variables fuera d ela funcion 
	
	
	$query="DELETE FROM empleado WHERE id={$id}";
		   
   //echo "<p> $query </p>";
 mysqli_query($conn, $query);
}

function borrarClase($id){
	global $conn; //buscar variables fuera d ela funcion 
	
	
	$query="DELETE FROM clase WHERE id={$id}";
		   
   //echo "<p> $query </p>";
 mysqli_query($conn, $query);
}

function borrarClaseDetalle($id){
	global $conn; //buscar variables fuera d ela funcion 
	
	
	$query="DELETE FROM detalle_clase WHERE id={$id}";
		   
   //echo "<p> $query </p>";
 mysqli_query($conn, $query);
}

function borrarUsuario($id){
	global $conn; //buscar variables fuera d ela funcion 
	
	
	$query="DELETE FROM usuario WHERE id={$id}";
		   
   //echo "<p> $query </p>";
 mysqli_query($conn, $query);
}

function consultaCliente($id){
	global $conn;
	$query="SELECT * FROM cliente WHERE id=$id";
	$result=mysqli_query($conn, $query);
	$datos="";
	$cliente=mysqli_fetch_object($result);
	$datos=$cliente->id."|".$cliente->nombre."|".$cliente->apellido."|".$cliente->edad."|".$cliente->telefono."|".$cliente->direccion."|".$cliente->email."|".$cliente->fecha_registro;
	return $datos;
}

function consultaAsistencia($id){
	global $conn;
	$query="SELECT * FROM asistencia WHERE id=$id";
	$result=mysqli_query($conn, $query);
	$datos="";
	$asistencia=mysqli_fetch_object($result);
	$datos=$asistencia->id."|".$asistencia->id_cliente."|".$asistencia->fecha;
	return $datos;
}

function consultaClase($id){
	global $conn;
	$query="SELECT * FROM clase WHERE id=$id";
	$result=mysqli_query($conn, $query);
	$datos="";
	$clase=mysqli_fetch_object($result);
	$datos=$clase->id."|".$clase->nombre."|".$clase->descripcion."|".$clase->fecha."|".$clase->id_empleado;
	return $datos;
}

function consultaClaseDetalle($id){
	global $conn;
	$query="SELECT * FROM detalle_clase WHERE id=$id";
	$result=mysqli_query($conn, $query);
	$datos="";
	$det=mysqli_fetch_object($result);
	$datos=$det->id."|".$det->id_clase."|".$det->id_cliente;
	return $datos;
}

function consultaEmpleado($id){
	global $conn;
	$query="SELECT * FROM empleado WHERE id=$id";
	$result=mysqli_query($conn, $query);
	$datos="";
	$emp=mysqli_fetch_object($result);
	$datos=$emp->id."|".$emp->nombre."|".$emp->apellido."|".$emp->puesto."|".$emp->telefono."|".$emp->direccion."|".$emp->rfc;
	return $datos;
}

function consultaUsuario($id){
	global $conn;
	$query="SELECT * FROM usuario WHERE id=$id";
	$result=mysqli_query($conn, $query);
	$datos="";
	$usuario=mysqli_fetch_object($result);
	$datos=$usuario->id."|".$usuario->usuario."|".$usuario->pwd."|".$usuario->nombre."|".$usuario->apellido."|".$usuario->email;
	return $datos;
}

function actualizarCliente($id, $nombre, $apellido, $edad, $telefono, $direccion, $email){
	global $conn;
	$query="UPDATE cliente SET nombre='$nombre', apellido='$apellido', edad=$edad, telefono=$telefono, direccion='$direccion', email='$email' WHERE id=$id";
	//echo $query;
	if(mysqli_query($conn, $query)){
		return TRUE;
	}else{
		return FALSE;
	}
}

function actualizarAsistencia($id, $id_cliente) {
	global $conn;
	$query="UPDATE asistencia SET id_cliente=$id_cliente WHERE id=$id";
	//echo $query;
	if(mysqli_query($conn, $query)){
		return TRUE;
	}else{
		return FALSE;
	}
}

function actualizarClase($id, $nombre, $descripcion, $fe, $id_empleado){
	global $conn;
	$query="UPDATE clase SET nombre='$nombre', descripcion='$descripcion', fecha=$fe, id_empleado=$id_empleado WHERE id=$id";
	//echo $query;
	if(mysqli_query($conn, $query)){
		return TRUE;
	}else{
		return FALSE;
	}
}

function actualizarClaseDetalle($id, $id_clase, $id_cliente){
	global $conn;
	$query="UPDATE detalle_clase SET id_clase=$id_clase, id_cliente=$id_cliente WHERE id=$id";
	//echo $query;
	if(mysqli_query($conn, $query)){
		return TRUE;
	}else{
		return FALSE;
	}
}

function actualizarEmpleado($id, $nombre, $apellido, $puesto, $telefono, $direccion, $rfc){
	global $conn;
	$query="UPDATE empleado SET nombre='$nombre', apellido='$apellido', puesto='$puesto', telefono=$telefono, direccion='$direccion', rfc='$rfc' WHERE id=$id";
	//echo $query;
	if(mysqli_query($conn, $query)){
		return TRUE;
	}else{
		return FALSE;
	}
}

function actualizarUsuario($id, $usuario, $pwd, $nombre, $apellido, $email){
	global $conn;
	$query="UPDATE usuario SET  usuario='$usuario', pwd='$pwd', nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id";
	//echo $query;
	if(mysqli_query($conn, $query)){
		return TRUE;
	}else{
		return FALSE;
	}
}
?>