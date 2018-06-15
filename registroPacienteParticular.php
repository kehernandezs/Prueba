<?php

session_start();

$tipo=$_POST['analisisCon'];
$cantGramos=$_POST['cantGramos'];
$centCubicos=$_POST['centCubicos'];
$codigoPar = $_SESSION['codigoParticular'];
require("connect_db.php");

mysqli_query($mysqli, "INSERT INTO ANALISISMUESTRAS ( fechaRecepcion, cantidadMuestra, centimetrosCubicos, Particular_codigoParticular,tipoAnalisis)
				 VALUES('SYSDATE()'
				 ,'$cantGramos'
				 ,'$centCubicos'
				 ,'$codigoPar'
				 ,'$tipo')");

	echo "<script>
				location.href='pagParticular.php'
				</script>";	
?>