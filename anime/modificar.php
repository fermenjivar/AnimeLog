<html>
<head>
  <title>Modificar Serie</title>
  <meta charset = "utf-8" />
	<link href="../css/estilo.css"	rel="stylesheet"	type="text/css" />
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
</head>
<body>
  <ul>
    <li class="dropbtn">My Weaboo List</li>
    <li><a class="active" href="../index.php">Home</a></li>
    <!--<li><a href="#news">Tags</a></li>-->
    <div class="dropdown">
      <a href="#" class="dropbtn">Series</a>
      <div class="dropdown-content">
        <a href="insert.php">Agregar</a>
        <a href="modificar.php">Modificar</a>
        <a href="eliminar.php">Eliminar</a>
    </div>
    </div>
    <div class="dropdown">
      <a href="#" class="dropbtn">Tags</a>
      <div class="dropdown-content">
        <a href="../season/agregar_season.php">Agregar</a>
        <a href="../season/modificar.php">Modificar</a>
        <a href="../season/eliminar.php">Eliminar</a>
      </div>
    </div>
  </ul>
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
