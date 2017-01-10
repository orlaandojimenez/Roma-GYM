<?php
require_once 'lib.php';
$datos= consultarClase();



echo "<h2> REPORTE CLASES </h2>";

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Nombre </td>";
echo "<td> Descripcion </td>";
echo "<td> Fecha </td>";
echo "<td> Id Empleado </td>";
echo "<td> Accion </td>";
echo "</tr>";

foreach ($datos as $key => $clase) {
	
	echo "<tr>";

echo "<td>".$clase->id."</td>";
echo "<td>".utf8_encode($clase->nombre)."</td>";
echo "<td>".utf8_encode($clase->descripcion)."</td>";
echo "<td>".date("d / m / Y ", $clase->fecha)."</td>";
echo "<td>".$clase->id_empleado."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$clase->id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$clase->id});'/>
</td>";
echo "</tr>";
}
echo "</table>";
?>