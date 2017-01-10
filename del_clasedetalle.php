<?php
require_once ("lib.php");
$id=$_POST['id'];
//echo "id".$id;
borrarClaseDetalle($id);
require_once 'rep_clasedetalle.php';
?>