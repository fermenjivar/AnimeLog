<html>
<head>
  <title>Anime Log</title>
  <meta charset = "utf-8" />
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link href="css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<!--<h1>My Weaboo List</h1>*-->

<ul>
  <li class="dropbtn">My Weaboo List</li>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Tags</a></li>
  <div class="dropdown">
    <a href="#" class="dropbtn">Series</a>
    <div class="dropdown-content">
      <a href="anime/insert.php">Agregar</a>
      <a href="anime/modificar.php">Modificar</a>
      <a href="anime/eliminar.php">Eliminar</a>
    </div>
  </div>
</ul>
<!--
<a href="">Agregar</a>
<a href="">Modificar</a>
<a href="">Eliminar</a>
-->
<br>
<br>
<table border="1">
  <tr>
    <th><b>Nombre</b></th>
    <th><b>Seasons</b></th>
    <th><b>Tags</b></th>
    <th><b>Año</b></th>
    <th><b>Temporada</b></th>
    <th><b>Score</b></th>
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
  $nombre = $row['nombre'];
  echo "<a href='season/agregar_season.php?anime=$nombre'>Agregar...</a>";
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
