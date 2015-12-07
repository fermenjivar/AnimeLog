<html>
<head>
  <title>Anime Log</title>
  <meta charset = "utf-8" />
	<link href="css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<h1>My Weaboo List</h1>
<a href="insert.php">Agregar</a>
<a href="modificar.php">Modificar</a>
<a href="eliminar.php">Eliminar</a>
<br>
<table border="1">
  <tr>
    <td><b>Nombre</b></td>
    <td><b>Tags</b></td>
    <td><b>Año</b></td>
    <td><b>Temporada</b></td>
    <td><b>Score</b></td>
  </tr>
<?php
include "conexion.php";
                    $consulta = "SELECT * FROM serie";
                    $cs = mysql_query($consulta);
                    while($row = mysql_fetch_array($cs)){
echo   "<tr>
  <td>".$row['nombre']."</td>
  <td></td>
  <td>".$row['year']."</td>
  <td>".$row['season']."</td>
  <td>".$row['score']."</td>"
."</tr>";
                    }
?>
</table>
</html>
