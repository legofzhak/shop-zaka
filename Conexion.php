<?php

include_once('DatosConexion.php');


$mysqli = new mysqli($host, $login, $password, $database);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "<br/>";
}

?>