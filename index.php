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
    <td><b>Seasons</b></td>
    <td><b>Tags</b></td>
    <td><b>Año</b></td>
    <td><b>Temporada</b></td>
    <td><b>Score</b></td>
  </tr>
<?php
include "conexion.php";
//Consulta 1 (Serie)
                    $consulta = "SELECT * FROM serie";
                    $cs = mysql_query($consulta);
                    while($row = mysql_fetch_array($cs)){
//Consulta 2 (Seasons)
$serie = $row['codigo'];
$consulta2 = "SELECT * from temps WHERE serie = $serie";
$cs2 = mysql_query($consulta2);

echo   "<tr>
  <td>".$row['nombre']."</td>
  <td>";
    while ($row2 = mysql_fetch_array($cs2)){
      echo "<b>".$row2['nombre'].":</b> ".$row2['score']."<br>";
    }
  echo "<a href='agregar_season.php'>Agregar...</a>";
  echo "</td><td>";
//Consulta 3 (Tags)
$consulta3 = "SELECT * from tagserie WHERE serie = $serie";
$cs3 = mysql_query($consulta3);
while ($row3 = mysql_fetch_array($cs3)){
  $tag = $row3['tag'];
  $consulta4 = "SELECT * from tag WHERE codigo = $tag";
  $cs4 = mysql_query($consulta4);
  while($row4 = mysql_fetch_array($cs4)){
    $nombretag = $row4['nombre'];
    echo "<a href='tag.php?tag=$nombretag'>".$row4['nombre']."</a><br>";
  }
}
  echo "</td>
  <td>".$row['year']."</td>
  <td>".$row['season']."</td>
  <td>".$row['score']."</td>"
."</tr>";
                    }
?>
</table>
</html>
