<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLERES FABER</title>
  </head>
  <body>
    <?php

          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "root", "", "TalleresFaber");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $mysqli->connect_error);
              exit();
          }
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
          if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {
              printf("<p>The select query returned %d rows.</p>", $result->num_rows);
    }
    ?>
<table border="1">
  <tr>
    <td><b>IdReparacion</td></b>
    <td><b>Matricula</td></b>
    <td><b>FechaEntrada</td></b>
    <td><b>Km</td></b>
    <td><b>Averia</td></b>
    <td><b>Fechasalida</td></b>
    <td><b>Reparado</td></b>
    <td><b>Observaciones</td></b>
    <td><b>Editar</td></b>
    <td><b>Añadir</td></b>
    <td><b>Tuerca</td></b>
    <td><b>Borrar</td></b>
    </tr>
    <tr>
      <?php
               //FETCHING OBJECTS FROM THE RESULT SET
               //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
               while($obj = $result->fetch_object()) {
                   //PRINTING EACH ROW
                   echo "<tr>";
                   echo "<td>".$obj->IdReparacion."</td>";
                   echo "<td>".$obj->Matricula."</td>";
                   echo "<td>".$obj->FechaEntrada."</td>";
                   echo "<td>".$obj->Km."</td>";
                   echo "<td>".$obj->Averia."</td>";
                   echo "<td>".$obj->FechaSalida."</td>";
                   echo "<td>".$obj->Reparado."</td>";
                   echo "<td>".$obj->Observaciones."</td>";
                   echo "<td><a href='editar.php?id=".$obj->IdReparacion."'><img src='editar.jpg'></td>";
                   echo "<td><a href='mas.php?id=".$obj->IdReparacion."'><img src='mas.jpg'></td>";
                   echo "<td><a href='tuerca.php?id=".$obj->IdReparacion."'><img src='tuerca.jpg'></td>";
                   echo "<td><a href='borrar.php?id=".$obj->IdReparacion."'><img src='borrar.jpg'></td>";
                   echo "</tr>";
               }
      ?>

    </table>

</body>
</html>
