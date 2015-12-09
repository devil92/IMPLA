<html>
<head>
    <title></title>
</head>

<body>
    
<?php

//Utilizando switch comprobar si el valor de una variables es "arriba", "abajo", "derecha" o "izquierda" sacando por pantalla en negrita un mensaje informando del valor.

$var='arriba';

switch ($var) {
    case 'arriba':
        echo "<b>arriba</b><br>";
        break;
    case 'abajo':
        echo "<b>abajo</b><br>";
        break;
    case 'derecha':
        echo "<b>derecha</b><br>";
        break;
    case 'izquierda':
        echo "<b>izquierda</b><br>";
        break;
}

?>

</body>
</html>
