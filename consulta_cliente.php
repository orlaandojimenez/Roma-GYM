<?php
require_once 'lib.php';

$id=$_POST["id"];

$datos=consultaCliente($id);
echo $datos;
?>