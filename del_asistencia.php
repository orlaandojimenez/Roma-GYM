<?php
require_once ("lib.php");
$id=$_POST['id'];
//echo "id".$id;
borrarAsistencia($id);
require_once 'rep_asistencia.php';
?>