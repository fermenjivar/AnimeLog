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
