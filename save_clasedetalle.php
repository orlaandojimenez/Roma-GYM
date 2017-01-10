<?php
require_once 'lib.php';
$id_clase=$_POST['id_clase'];
$id_cliente=$_POST['id_cliente'];

/*echo "<p> Id clase: ".$id_clase."</p>";
echo "<p> Id cliente: ".$id_cliente."</p>";*/

guardarClaseDetalle($id_clase, $id_cliente);
require_once 'rep_clasedetalle.php';

?>