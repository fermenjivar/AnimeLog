<html>
<head>
  <title>Eliminar Serie</title>
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
  <h1>Eliminar un animu: (why D:)</h1>
  <a href="../index.php">Inicio</a>
  <br><br>
<form action="eliminar.php" method="POST">
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
  <input type="submit" name="eliminar" value="Eliminar">
  <?php
  if(isset($_POST['anime']) and isset($_POST['eliminar'])){
    $anime = $_POST['anime'];
    $consulta = mysql_query("DELETE FROM serie WHERE codigo='$anime'");
    if($consulta > 0){
      echo "Animu destruido";
    }
    }
  ?>
</form>
</body>

</html>
