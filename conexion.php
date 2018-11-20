<?php

/*
	Establesco la coneccion en una variable llamada conexion
	le pasamos los 4 parametros necesarios
	direccion del servidor, user, pass, nombre de la BD
*/

$conexion = mysqli_connect("127.0.0.1","root","","prueba");


/*
	Si algun dao de la conexion es erronea entonces muestra un error 
	si no entonces conectado con exito.

*/

if (!$conexion){

	echo "Error al conectar a la base de datos";

}else{

	//echo "Conectado con exito...";
}
