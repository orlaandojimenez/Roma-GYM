<?php
require_once ("lib.php");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$email=$_POST["email"];
$id=$_POST["id"];
actualizarCliente($id, $nombre, $apellido, $edad, $telefono, $direccion, $email);
require_once 'rep_clientes.php';

?>