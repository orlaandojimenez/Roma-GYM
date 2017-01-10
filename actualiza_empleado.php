<?php
require_once 'lib.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$puesto=$_POST['puesto'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$rfc=$_POST['rfc'];
$id=$_POST["id"];
actualizarEmpleado($id, $nombre, $apellido, $puesto, $telefono, $direccion, $rfc);
require_once 'rep_empleados.php';
?>