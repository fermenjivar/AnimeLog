<div class='d1'>
<?php
$temps = mysql_query("SELECT * FROM temps WHERE serie = $anime");
if(mysql_num_rows($temps) == 0){echo "<h1>No hay temporadas que mostrar.</h1>";}
else{
echo "
      <h2>Temporadas</h2>
      <table border='1'>
        <tr>
          <th><b>Nombre</b></th>
          <th><b>Score</b></th>
        </tr>";
    while($trow = mysql_fetch_array($temps)){
            echo "<tr>";
            $nombre_temp = $trow['nombre'];
            $score_temp = $trow['score'];
            echo "<td>".$nombre_temp."</td>";
            echo "<td>".$score_temp."</td></tr>";
      }
      echo "</table>";
  }
    ?>
    </div>
