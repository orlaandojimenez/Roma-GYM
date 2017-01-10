<?php
require_once 'lib.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$puesto=$_POST['puesto'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$rfc=$_POST['rfc'];

/*echo "<p> Nombre: ".$nombre."</p>";
echo "<p> Apellido: ".$apellido."</p>";
echo "<p> Puesto: ".$puesto."</p>";
echo "<p> Telefono: ".$telefono."</p>";
echo "<p> Direccion: ".$direccion."</p>";
echo "<p> RFC: ".$rfc."</p>";*/

guardarEmpleado($nombre, $apellido, $puesto, $telefono, $direccion, $rfc);
require_once 'rep_empleados.php';

?>