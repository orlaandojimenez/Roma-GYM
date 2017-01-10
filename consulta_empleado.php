<?php
require_once 'lib.php';

$id=$_POST["id"];

$datos=consultaEmpleado($id);
echo $datos;
?>