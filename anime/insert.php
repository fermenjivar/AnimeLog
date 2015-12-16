<html>
<head>
  <title>Nueva Serie</title>
  <meta charset = "utf-8" />
	<link href="../css/estilo.css"	rel="stylesheet"	type="text/css" />
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
</head>
<body>
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
