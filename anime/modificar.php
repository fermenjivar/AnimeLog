<html>
<head>
  <title>Modificar Serie</title>
  <meta charset = "utf-8" />
	<link href="../css/estilo.css"	rel="stylesheet"	type="text/css" />
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
</head>
<body>
  <h1>Modificar animu: </h1>
  <a href="../index.php">Inicio</a>
  <br><br>
<form action="modificar.php" method="POST">
  <label>Nombre: </label>
  <select name="anime">
    <option>::Seleccion un animu::</option>
    <?php
    include "../conexion.php";
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
include "../php/serie_modificar.php";
?>
</form>
</body>

</html>
