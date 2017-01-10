<?php
require_once ("lib.php");
$id=$_POST['id'];
//echo "id".$id;
borrarEmpleado($id);
require_once 'rep_empleados.php';
?>