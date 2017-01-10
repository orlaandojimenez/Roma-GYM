<?php
require_once 'lib.php';
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$fe=explode("-", $fecha);
print_r($fe);
$id_empleado=$_POST['id_empleado'];

$fes=mktime(12,0,0,$fe[1],$fe[2], $fe[0]);
/*echo "<p> Nombre: ".$nombre."</p>";
echo "<p> Apellido: ".$descripcion."</p>";
echo "<p> Id empleado: ".$id_empleado."</p>";*/

guardarClase($nombre, $descripcion, $fes, $id_empleado);
require_once 'rep_clases.php';

?>