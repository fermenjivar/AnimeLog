<html>
<head>
  <title>Anime Log</title>
  <meta charset = "utf-8" />
	<link href="css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<body>
  <h1>Modificar animu: </h1>
  <a href="index.php">Inicio</a>
  <br><br>
<form action="modificar.php" method="POST">
  <label>Nombre: </label>
  <select name="anime">
    <option>::Seleccion un animu::</option>
    <?php
    include "conexion.php";
    $consulta = "SELECT * FROM serie";
    $cs = mysql_query($consulta);
    while($row = mysql_fetch_array($cs)){
      echo "<option value='".$row['codigo']."'>".$row['nombre']."</option>";
    }
    ?>
  </select>
    <hr>
    <label>Nombre: </label><br>
    <input type="text" name="nombre"><br>
    <label>Año: </label><br>
  <input type="number" name="year">
  <br>
  <label>Temporada: </label><br>
  <input type="text" name="season">
    <br>
  <label>Score: </label><br>
  <input type="number" name="score">
  <br><br>
  <input type="submit" name="modificar" value="Modificar">
  <?php

  if(isset($_POST['anime']) and isset($_POST['modificar'])){
      $anime = $_POST['anime'];
      $nombre = $_POST['nombre'];
      $year = $_POST['year'];
      $season = $_POST['season'];
      $score = $_POST['score'];
        if(isset($_POST['nombre']) and $nombre != ""){
            $consulta1 = mysql_query("UPDATE serie set nombre='$nombre' WHERE codigo = $anime");
        }
        if(isset($_POST['year']) and $year != ""){
            $consulta2 = mysql_query("UPDATE serie set year='$year' WHERE codigo = $anime");
        }
        if(isset($_POST['season']) and $season != ""){
            $consulta3 = mysql_query("UPDATE serie set season='$season' WHERE codigo = $anime");
        }
        if(isset($_POST['score']) and $score != ""){
            $consulta4 = mysql_query("UPDATE serie set score='$score' WHERE codigo = $anime");
        }
    }
  ?>
</form>
</body>

</html>
