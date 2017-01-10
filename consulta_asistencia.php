<?php
require_once 'lib.php';

$id=$_POST["id"];

$datos=consultaAsistencia($id);
echo $datos;
?>