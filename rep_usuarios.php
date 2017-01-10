
	
	<?php
require_once 'lib.php';
$datos= consultarUsuario();


echo "<h2> REPORTE USUARIOS </h2>";

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Usuario </td>";
echo "<td> Password </td>";
echo "<td> Nombre </td>";
echo "<td> Apellido </td>";
echo "<td> Email </td>";
echo "<td> Accion </td>";
echo "</tr>";

foreach ($datos as $key => $usuario) {
	
	echo "<tr>";

echo "<td>".$usuario->id."</td>";
echo "<td>".$usuario->usuario."</td>";
echo "<td>".$usuario->pwd."</td>";
echo "<td>".utf8_encode($usuario->nombre)."</td>";
echo "<td>".utf8_encode($usuario->apellido)."</td>";
echo "<td>".$usuario->email."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$usuario->id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$usuario->id});'/>
</td>";
echo "</tr>";
}
echo "</table>";
?>