<?php

/*
	se incluye el archivo conexion.php
*/

include("conexion.php");


//Aqui guardamos los datos ingresados en el campo del formulario (nombre)

$user = $_POST['user'];


/*
	isset() = determina si una variable ha sido declarada y su valor no es NULO
	is_null = Comprueba si una variable es NULL
	empty()   = Determina si una variable está vacía

*/

/*

	Creamos un condicional para validar que los campo no esten vacios o nulos 

*/
if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){


	//Si los campos no estan nulos se insertan los datos en la tabla productos

	mysqli_query($conexion,("INSERT INTO producto (user, pass) VALUES('$_POST[user]','$_POST[pass]')"));

	//echo "Datos insertados exitosamente";

	echo " hola " . $user;

}else{

	echo "error al insertar datos";
}


?>