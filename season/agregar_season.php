<html>
<head>
  <title>Nueva Season</title>
  <meta charset = "utf-8" />
	<link href="../css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<body>
  <ul>
    <li class="dropbtn">My Weaboo List</li>
    <li><a class="active" href="../index.php">Home</a></li>
    <!--<li><a href="#news">Tags</a></li>-->
    <div class="dropdown">
      <a href="#" class="dropbtn">Series</a>
      <div class="dropdown-content">
        <a href="../anime/insert.php">Agregar</a>
        <a href="../anime/modificar.php">Modificar</a>
        <a href="../anime/eliminar.php">Eliminar</a>
    </div>
    </div>
    <div class="dropdown">
      <a href="#" class="dropbtn">Tags</a>
      <div class="dropdown-content">
        <a href="season/insert.php">Agregar</a>
        <a href="season/modificar.php">Modificar</a>
        <a href="season/eliminar.php">Eliminar</a>
      </div>
    </div>
  </ul>
  <h1>Agregar nuevo animu: </h1>
  <a href="../index.php">Inicio</a>
  <br><br>
<form action="agregar_season.php" method="POST">
  <h3>Serie: <h3>
    <select name="anime">
      <option value="a">::Seleccion un animu::</option>
      <?php include "../php/get_select.php"; ?>
    </select>
  <label>Nombre: </label>
  <input type="text" name="nombre">
  <label>Score: </label>
  <input type="text" name="score">
  <input type="submit" name="insertar" value="Agregar">
  <?php
    if(isset($_POST['nombre']) and isset($_POST['score']) and isset($_POST['insertar'])){
        if($_POST['nombre'] != "" and $_POST['score'] != ""){
          if( strlen($_POST['nombre']) > 50 or $_POST['score'] > 10){
            echo "Muy largo.";
          }
          else{
            include "../php/season_agregar.php";
          }
        }
        else{echo "Vacio.";}
    }
  ?>
</form>
</body>

</html>
