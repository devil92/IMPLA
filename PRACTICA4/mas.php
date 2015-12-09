<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">

</head>

<body>
    
    <?php
    // Conectando, seleccionando la base de datos
    $link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
    mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');
    mysql_set_charset('utf8',$link);

    if (isset($_GET['cod'])) {

    // Realizar una consulta MySQL
    $query = "select CodEmpleado from empleados";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    
    echo '<form method="post" action="empleados.php">';
    echo "<select name='CodEmpleado'>";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "<option value='".$line['CodEmpleado']."'>".$line['CodEmpleado']."</option>";
    }
    echo '</select> Inserta empleado <br>';
    echo "<input type='hidden' name='IdReparacion' value='".$_GET['cod']."'><br>";
    echo '<input type="text" name="horas">  Horas<br><br>';
    echo '<input type="submit" name="env" value="Insertar">';
    echo '</form>';
    }
    if (isset($_POST["env"])){
    $query1 = "INSERT INTO intervienen VALUES   ('".$_POST['CodEmpleado']."','".$_POST['IdReparacion']."','".$_POST['horas']."')";
 $result = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
        
    header ("refresh:5; url=reparaciones.php");
    }
      
         mysql_close($link);
    ?>
</body>
</html>