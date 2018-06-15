<?php

$nombrePar=$_POST['nombreParticular']; 
$rutPar=$_POST['rutParticular'];
$passPar=$_POST['passParticular'];
$rpassPar=$_POST['rpassParticular'];
$direccionPar=$_POST['direccionParticular'];
$emailPar=$_POST['emailParticular'];


//guardar datos tabla TELEFONO
$fonoPar=$_POST['fonoParticular'];


require("connect_db.php");

$checkRut = mysqli_query($mysqli, "SELECT * FROM PARTICULAR
 WHERE rutParticular='$rutPar'");
$check_Rut = mysqli_num_rows($checkRut);

$codigoPar= rand(250000,400000); 

//$checkCodigo = mysqli_query($mysqli, "SELECT * FROM PARTICULAR
 //WHERE codigoParticular = '$codigoPar'");

//$check_codigo = mysqli_num_rows($checkCodigo);


//while(check_codigo > 0){
//	$codigoPar = rand(250000,40000);
//}
  
	if ($passPar == $rpassPar) {
		if ($check_Rut>0) {
			echo ' <script language="javascript">
				alert("Atencion, ya existe el Rut designado para una empresa, Intente nuevamente");
				</script> ';
		}else
		{
			//Inserta los datos a la tabla PARTICULAR
			mysqli_query($mysqli, "INSERT INTO PARTICULAR 
				VALUES('$codigoPar','$rutPar','$passPar','$nombrePar','$direccionPar','$emailPar')");
			//Inserta los datos a la tabla TELEFONO
			mysqli_query($mysqli, "INSERT INTO TELEFONO(numeroTelefono,Particular_codigoParticular)
				VALUES('$fonoPar','$codigoPar')");



			//echo ' <script language="javascript">
			//	alert("Usuario registrado con éxito");
			//	</script> ';

			echo "<script>
				location.href='login.php'
				</script>";	
				
		}
	}else
		{
			echo 'las contraseñas no coinciden, porfavor intente nuevamente';
		}

?>