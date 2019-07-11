<?php 
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$comentario = $_POST["comentario"];
	$genero = $_POST["genero"];


	echo "<html>";
	echo "<body>";
	echo "<h1>Tus datos son</h1>";
	echo "<table width='200'>";
	echo "<tr>";
	echo "<td>";
	echo "Nombre";
	echo "</td>";
	echo "<td>";
	echo $nombre;
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "Apellido";
	echo "</td>";
	echo "<td>";
	echo $apellido;
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "Genero";
	echo "</td>";
	echo "<td>";
	echo $genero;
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "Comentario";
	echo "</td>";
	echo "<td>";
	echo $comentario;
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</body>";
	echo "</html>";
 ?>


