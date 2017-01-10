<?php
require_once ("lib.php");
$id=$_POST['id'];
//echo "id".$id;
borrarCliente($id);
require_once 'rep_clientes.php';
?>