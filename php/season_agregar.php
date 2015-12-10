<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$score = $_POST['score'];
$codigo = mysql_query("SELECT * FROM temps");
$cod = mysql_num_rows($codigo) + 1;
$serieget= $_POST['anime'];
$consulta1 = "SELECT * FROM serie WHERE nombre = '$serieget'";
$cs1 = mysql_query($consulta1);
if($serieget == "a"){
  echo "Seleccione un anime?";
}
else{
  while ($row = mysql_fetch_array($cs1)){
    $anime2 = $row[0];
    $insertar = "INSERT INTO temps VALUES ('$cod','$anime2','$nombre','$score')";
    //echo $insertar;
    $insertar_con = mysql_query($insertar);
    if($insertar_con > 0){
      echo "Season Insertada!";
    }
    else{
        echo "Algo malo paso".mysql_error();
    }
  }
}
?>
