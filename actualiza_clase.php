<?php
require_once 'lib.php';
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$id_empleado=$_POST['id_empleado'];
$id=$_POST["id"];
$fecha=$_POST['fecha'];
$fe=explode("-", $fecha);
//print_r($fe);

$fes=mktime(12,0,0,$fe[1],$fe[2], $fe[0]);
 actualizarClase($id, $nombre, $descripcion, $fes, $id_empleado);
 require_once 'rep_clases.php';
?>