<html>
<head><title><h1>Vectores</h1></title></head>
<body>
<?php

$v1=["San Cristóbal","Cucuta","Maracaibo","Caracas"];
echo "numero de elementos".sizeof($v1)."<br>";
for ($i=0;$i<sizeof($v1);$i++) {
        echo "Ciudad $i<br>"."<h1>".$v1[$i]."</h1>"."<br>";
      }
?>
</body>
</html>
