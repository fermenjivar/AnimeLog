<?php
include "../conexion.php";
$nombre = $_POST['nombre'];
$year = $_POST['year'];
$season = $_POST['season'];
$score = $_POST['score'];
$codigo = mysql_query("SELECT * FROM serie");
$cod = mysql_num_rows($codigo) + 1;
$check = "SELECT * FROM serie WHERE nombre = '$nombre'";
$check2 = mysql_query($check);
$checkcs = mysql_num_rows($check2);
if($checkcs){
  echo "Ese anime ya existe. No me quiera ver la cara ( ͠° ͟ʖ ͡°)";
}
else{
  $cs = "INSERT INTO serie VALUES ($cod,'$nombre','$year','$season','$score')";
  $consulta = mysql_query($cs);
  if($consulta > 0){
    echo "Animu insertado";
  }
  else{
      echo "algo malo paso".mysql_error();
  }
}
?>
