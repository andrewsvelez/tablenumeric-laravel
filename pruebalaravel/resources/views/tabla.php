<!DOCTYPE html>
<html>
<head>
    <title>ejercicio 4.4</title>
    <style type="text/css">

    </style>
</head>
<body>
  <?php
    echo "<table border=1>";
    $n=1;
    for ($n1=1; $n1<=10; $n1++)
    {
     echo "<tr>";
     for ($n2=1; $n2<=10; $n2++)
     {
     echo "<td>", $n, "</td>";
     $n=$n+1;
     }
     echo "</tr>";
    }
    echo "</table>";
  ?>
</body>
</html>
  <!-- http://servicio.uca.es/softwarelibre/publicaciones/apuntes_php-->
  
