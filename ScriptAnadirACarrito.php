<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<link href="homepage_style.css" type="text/css" rel="stylesheet"/>

<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php
	include_once ('Conexion.php');
	$producto = $_GET['producto'];
	$cantidad = $_GET['cantidad'];
	$login = $_GET['login'];
	$seccion = $_GET['seccion'];

	if(!$cantidad == 0)
	{

		$cadenaSQL = "INSERT INTO carrito (productos_Codigo, Cliente_login, cantidad)
					VALUES ('$producto', '$login', '$cantidad')";
					
		$mysqli->query($cadenaSQL);
					
		if ($mysqli->affected_rows == 1)
		{
				echo "<h1>Producto añadido con éxito</h1>";
				echo "<a href='Secciones.php?login=$login&seccion=$seccion'>Volver atrás</a>";
		}
		else 
		{
				echo "<h1>Producto no añadido</h1>";
				echo "<a href='Secciones.php?login=$login&seccion=$seccion'>Volver atrás</a>";
		}
	}
	else
	{
		echo "<h1>Producto no añadido</h1>";
		echo "<a href='Secciones.php?login=$login&seccion=$seccion'>Volver atrás</a>";
	}

$mysqli->close();
?>

</body>
</html>
