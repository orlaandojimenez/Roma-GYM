<?php
require_once 'lib.php';

$id=$_POST["id"];

$datos=consultaClaseDetalle($id);
echo $datos;
?>