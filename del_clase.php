<?php
require_once ("lib.php");
$id=$_POST['id'];
//echo "id".$id;
borrarClase($id);
require_once 'rep_clases.php';
?>