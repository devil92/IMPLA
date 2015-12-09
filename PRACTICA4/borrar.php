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

          $op1='delete from incluyen where IdReparacion='.$_GET["id"];
          $op2='delete from intervienen where IdReparacion='.$_GET["id"];
          $op3='delete from realizan where IdReparacion='.$_GET["id"];
          $op4='delete from facturas where IdReparacion='.$_GET["id"];
          $op5='delete from reparaciones where IdReparacion='.$_GET["id"];

          if ($result = $connection->query($op1)) {
            echo "Primera query realizada"."</br>";
              }
          if ($result = $connection->query($op2)) {
                echo "Segunda query realizada"."</br>";
              }
          if ($result = $connection->query($op3)) {
                echo "Tercera query realizada"."</br>";
              }
          if ($result = $connection->query($op4)) {
                echo "Cuarta query realizada"."</br>";
              }
          if ($result = $connection->query($op5)) {
                echo "Quinta query realizada"."</br>";
              }
              echo var_dump($_GET);

            header("refresh:3; url=talleres.php");

    ?>
</body>
</html>
