<?php
require_once 'lib.php';
$id_clase=$_POST['id_clase'];
$id_cliente=$_POST['id_cliente'];
$id=$_POST["id"];
actualizarClaseDetalle($id, $id_clase, $id_cliente);
require_once 'rep_clasedetalle.php';
?>