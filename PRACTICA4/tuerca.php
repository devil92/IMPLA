<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
</head>

<body>
    
    <?php
    // Conectando, seleccionando la base de datos
    $link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
    mysql_set_charset('utf8',$link);
    mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');
    
    if (isset($_GET['cod'])) {

    // Realizar una consulta MySQL
    $query = "select IdRecambio from recambios";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    
    echo '<form method="post" action="piezas.php">';
    echo "<select name='IdRecambio'>";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "<option value='".$line['IdRecambio']."'>".$line['IdRecambio']."</option>";
    }
    echo '</select>Añadir Nuevo Recambio<br>';
    echo "<input type='hidden' name='IdReparacion' value='".$_GET['cod']."'><br>";
    echo '<input type="text" name="Unidades">Unidades<br><br>';
    echo '<input type="submit" name="Enviar" value="Añadir Recambio">';
    echo '</form>';
    }
    
    if (isset($_POST["Enviar"])){
    $query1 = "INSERT INTO incluyen VALUES          ('".$_POST['IdRecambio']."','".$_POST['IdReparacion']."','".$_POST['Unidades']."')";
 $result = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
        
    header ("refresh:5; url=reparaciones.php");
    }
      
    
         mysql_close($link);
    ?>
</body>
</html>