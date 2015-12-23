<?php
include "../conexion.php";
$consulta = "SELECT * FROM serie";
$serieget= $_GET['anime'];
$cs = mysql_query($consulta);
while($row = mysql_fetch_array($cs)){
  $seriecon = $row['nombre'];
  if($seriecon == $serieget){
    echo "<option value='".$row['nombre']."' selected>".$row['nombre']."</option>";
  }else{
    echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
  }
}
?>
