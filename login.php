<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<link href="./css/homepage_style.css" type="text/css" rel="stylesheet"/>

<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
    <?php
    include_once ('Conexion.php');
    $login  = $_POST['nombre'];
    $password  = $_POST['pass'];

    $cadenaSQL = "SELECT * FROM cliente WHERE login='$login' AND password='$password'";

    $result = $mysqli->query($cadenaSQL);

    if($result)
    {
        if($result->num_rows == 1)
        {
            $cadenaSQL = "SELECT * FROM secciones";
            $result = $mysqli->query($cadenaSQL);

            if ($result){
                
                echo "<h1>Bienvenido, ".$login."</br></h1>";
                echo "<table style='margin-left:auto;margin-right:auto;'>";
                 while ($fila = $result->fetch_object()) {
                    echo "<td><h2>"."<a href = 'Secciones.php?seccion=$fila->IdSeccion&login=$login&password=$password'>" . $fila->Nombre . "</h2></a>";
                }
                echo "</table>";
                echo "<h3><a href='index.php'>Salir</a></h3>";
                
            }
            else 
            {
                echo "<h1>Aún no existen secciones</h1>";
                echo "<a href='login.php'>Salir</a>";
            }
        }
        else
        {
            echo "Datos incorrectos";
            echo "<br><a href='index.php'>Salir</a></br>";
        }

    }
$mysqli->close();
?>
</body>
</html>