<html>
<head>
    <title></title>
</head>

<body>
    
<?php

//Relizar un programa que utilizando la función date() nos diga si el sitio está o no fuera de servicio. Estará fuera activo si estamos en los 10 primero días del mes.
//Dentro de la funcion date, le pasamos el parametro d correspondiente
//a que nos cuente tan solo los dias, sin incluir los meses y los años.

$dia=date("d");
if ($dia<=10) {
    echo "Sitio Activo Actualmente";
} else {
    echo "Sitio Fuera De Servicio Temporalmente";
}

?>

</body>
</html>
