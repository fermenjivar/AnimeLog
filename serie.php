<html>
<head>
  <title>Anime Log</title>
  <meta charset = "utf-8" />
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link href="css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<body>
  <?php
  include "navbar.php";
  ?>
<br><br>
<?php
  $serie = $_GET['anime'];
  include "conexion.php";
  $consulta = mysql_query("SELECT * FROM serie WHERE nombre = '$serie'");
  while($row = mysql_fetch_array($consulta)){
    $anime = $row['codigo'];
    $imagen = $row['imagen'];
?>
  <div class="d1">
    <div class="s1">
      <center><h1><?=$row['score']?>/10</h1></center>
      <div class="h1"><h1><?=$row['nombre']?></h1></div>
      <div class="s3">
        <b>Año: </b><?=$row['year']?>
        <br>
        <b>Temporada: </b><?=$row['season']?>
        <button>Ver Temporadas</button>
        <br>
        <b>Tags:</b>
        <br>
        <?php
          $consulta2 = mysql_query("SELECT * from tagserie WHERE serie = '$anime'");
          while($row2 = mysql_fetch_array($consulta2)){
            $tag = $row2['tag'];
            $consulta3 = mysql_query("SELECT * from tag WHERE codigo = '$tag'");
            while($row3 = mysql_fetch_array($consulta3)){
              echo $row3['nombre']." ";
            }
          }
        ?>
      </div>
    </div>
    <div class="s2">
        <img width="600px" height="360px" src="<?=$imagen?>">
    </div>
  </div>
<?php
}
include "season/mostrar_season.php";
?>
</body>
</html>
