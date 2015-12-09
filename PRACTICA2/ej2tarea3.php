<html>
<head><title><h1>Vectores</h1></title></head>
<body>
<table>
<?php
$v1=["2222222X" => "Pepe", "3333333X" => "Manuel", "4444444X" => "José", "5555555X" => "Rosa"];
$v2=["2222222X" => "Pérez", "3333333X" => "Jiménez", "4444444X" => "JMartínez", "5555555X" => "Rodríguez"];

foreach($v1 as $k => $z) {
  echo "<tr>"."<td>".$z."</td>"."<td>".$v2[$k]."</td>"."</tr>";
}

?>
</table>
</body>
</html>
