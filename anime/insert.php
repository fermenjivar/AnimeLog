<html>
<head>
  <title>Nueva Serie</title>
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
  <h1>Agregar nuevo animu: </h1>
  <a href="../index.php">Inicio</a>
  <br><br>
<form action="insert.php" method="POST">
  <label>Nombre: </label>
  <input type="text" name="nombre" maxlength="150">
  <label>Año: </label>
  <input type="tel" name="year" maxlength="4">
  <br><br>
  <label>Temporada: </label>
  <input type="text" name="season">
  <label>Score: </label>
  <input type="tel" name="score" maxlength="4">
  <br><br>
  <input type="submit" name="insertar" value="Agregar">
  <?php
  if(isset($_POST['nombre']) and isset($_POST['year']) and isset($_POST['season']) and isset($_POST['score'])){
      if($_POST['nombre'] != "" and $_POST['year'] != "" and $_POST['score'] != ""){
          include "../php/serie_agregar.php";
      }
      else{
          echo "Falta algo...";
      }
  }
  ?>
</form>
</body>

</html>
