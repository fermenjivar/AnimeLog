<html>
<head>
  <title>Anime Log</title>
  <meta charset = "utf-8" />
	<link href="css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<body>
  <h1>Eliminar un animu: (why D:)</h1>
  <a href="index.php">Inicio</a>
  <br><br>
<form action="eliminar.php" method="POST">
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
