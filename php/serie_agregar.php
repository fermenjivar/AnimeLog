<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$year = $_POST['year'];
$season = $_POST['season'];
$score = $_POST['score'];
$codigo = mysql_query("SELECT * FROM serie");
$cod = mysql_num_rows($codigo) + 1;
$check = mysql_query("SELECT * FROM serie WHERE nombre = $nombre");
//if(mysql_num_rows($check) > 0){
if($check > 0){
  echo "Ese anime ya existe. No me quiera ver la cara ( ͠° ͟ʖ ͡°)";
}
else{
  $cs = "INSERT INTO serie VALUES ($cod,'$nombre','$year','$season','$score')";
  echo $cs;
  $consulta = mysql_query($cs);
  if($consulta > 0){
    echo "Animu insertado";
  }
  else{
      echo "algo malo paso".mysql_error();
  }
}
?>
