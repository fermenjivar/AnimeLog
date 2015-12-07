<html>
<head>
  <title>Anime Log</title>
  <meta charset = "utf-8" />
	<link href="css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<body>
  <h1>Agregar nuevo animu: </h1>
  <a href="index.php">Inicio</a>
  <br><br>
<form action="insert.php" method="POST">
  <label>Nombre: </label>
  <input type="text" name="nombre">
  <label>Año: </label>
  <input type="number" name="year">
  <br><br>
  <label>Temporada: </label>
  <input type="text" name="season">
  <label>Score: </label>
  <input type="number" name="score">
  <br><br>
  <input type="submit" name="insertar" value="Agregar">
  <?php
  if(isset($_POST['nombre']) and isset($_POST['year']) and isset($_POST['season']) and isset($_POST['score'])){
    include "conexion.php";
    $nombre = $_POST['nombre'];
    $year = $_POST['year'];
    $season = $_POST['season'];
    $score = $_POST['score'];
    $consulta = mysql_query("INSERT INTO serie VALUES (null,'$nombre','$year','$season','$score')");
    if($consulta > 0){
      echo "Animu insertado";
    }
      else{
          echo "algo malo paso";
      }
    }
  ?>
</form>
</body>

</html>
