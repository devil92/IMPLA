<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <?php
        //VENGO DE CLIENTES.PHP. PETICIÓN GET
        //Compruebo que he recibido el parámetro por la query.
        if (isset($_GET['cod'])) {
            $link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
            mysql_set_charset('utf8',$link);
            mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');

            // Realizar una consulta MySQL. OBTENGO LOS DATOS DEL CLIENTE
            //IMPORTANTE: ESTOY BUSCANDO POR CLAVE. Si no tendría que 
            //usar mysql_num_rows
            $query = "SELECT * FROM Reparaciones WHERE IdReparacion='".$_GET['cod']."';";
            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
            echo "<form method='post' action='edit.php'>";
            while ($line = mysql_fetch_array($result)) {
                echo "Matricula:<input type='text' name='Matricula' value='".$line['Matricula']."'><br>";
                echo "Fecha_Entrada:<input type='text' name='FechaEntrada'  value='".$line['FechaEntrada']."'><br>";
                echo "Km:<input type='text' name='Km' value='".$line['Km']."'><br>";
                echo "Averia:<input type='text' size='50' name='Averia' value='".$line[4]."'><br>";
                echo "FechaSalida:<input type='text' name='FechaSalida' value='".$line['FechaSalida']."'><br>";
                echo "Reparado:<input type='text' name='Reparado' value='".$line['Reparado']."'><br>";
                echo "Observaciones:<input type='text' name='Observaciones' value='".$line['Observaciones']."'><br>";
                //Este campos no se va a modificar, lo muestro oculto
                echo "<input type='hidden' name='IdReparacion' value='".$line['IdReparacion']."'><br>";
                echo "<input type='submit' name='enviar' value='Enviar'><br>";
            }
            echo "</form>";
            // Cerrar la conexión
            mysql_close($link);
            
        }

        //VENGO DE UNA PETICION POST
        if (isset($_POST['enviar'])) {
            $link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
            mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');
            echo var_dump ($_POST);
            
            //CONSTRUYO LA CONSULTA DE ACTUALIZACIÓN
            
            $query="UPDATE Reparaciones SET IdReparacion='".
                $_POST['IdReparacion']."',Matricula='".
                $_POST['Matricula']."',FechaEntrada='".
                $_POST['FechaEntrada']."',Km='".
                $_POST['Km']."',Averia='".
                $_POST['Averia']."',FechaSalida='".
                $_POST['FechaSalida']."',Reparado='".
                $_POST['Reparado']."',Observaciones='".
                $_POST['Observaciones']."' WHERE IdReparacion='".$_POST['IdReparacion']."';";
            echo var_dump ($query);
            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
            if ($result) {
            echo "Actualizado realizado correctamente";
           
            } 
            
            // Cerrar la conexión
            mysql_close($link);
            
            header("refresh:5; url=reparaciones.php");                
            
        }
    ?>
</body>
</html>