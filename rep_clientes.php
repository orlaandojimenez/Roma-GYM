<?php
require_once 'lib.php';
$datos= consultarCliente();


echo "<h2> REPORTE CLIENTES </h2>";

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Nombre </td>";
echo "<td> Apellidos </td>";
echo "<td> Edad </td>";
echo "<td> Telefono </td>";
echo "<td> Direccion </td>";
echo "<td> Email </td>";
echo "<td> FR </td>";
echo "<td> Accion </td>";
echo "</tr>";

foreach ($datos as $key => $cliente) {
	
	echo "<tr>";

echo "<td>".$cliente->id."</td>";
echo "<td>".utf8_encode($cliente->nombre)."</td>";
echo "<td>".utf8_encode($cliente->apellido)."</td>";
echo "<td>".$cliente->edad."</td>";
echo "<td>".$cliente->telefono."</td>";
echo "<td>".utf8_encode($cliente->direccion)."</td>";
echo "<td>".utf8_encode($cliente->email)."</td>";
echo "<td>".date("d / m / Y ", $cliente->fecha_registro)."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$cliente->id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$cliente->id});'/>
</td>";
echo "</tr>";
}
echo "</table>";
?>