<?php

	$mysqli = mysqli_connect("localhost", "root", "", "hospital"); //cambiar para configurarlo con 000webhost
	$consultaEmp= '';
	if ($mysqli -> connect_errno) {
	 die("Fallo la conexion a MySQL: (". $MySQLi -> mysqli_connect_errno()
		. ") " . $MySQLi -> mysqli_connect_error());
	}
	else
		//echo "Conexion exitosaa!";
	
	

?>