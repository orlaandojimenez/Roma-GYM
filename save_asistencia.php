<?php
require_once 'lib.php';
$id_cliente=$_POST['id_cliente'];

guardarAsistencia($id_cliente);
require_once 'rep_asistencia.php';
?>