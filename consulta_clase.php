<?php
require_once 'lib.php';

$id=$_POST["id"];

$datos=consultaClase($id);
echo $datos;
?>