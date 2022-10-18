<?php

$host='localhost';
$bd='postgres';
$user='postgres';
$pass='Civilwar24abril$';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO formulario(nombre,grupo,carrera,plantel,calavera)
VALUES('$_REQUEST[nombre]','$_REQUEST[ngrupo]','$_REQUEST[carreras]','$_REQUEST[nplantel]','$_REQUEST[nimagenes]')");

$consulta=pg_query($conexion,$query);
pg_close();
echo 'TE HAS REGISTRADO CORRECTAMENTE, YA PUDES CERRAR ESTA PAGINA';

?>