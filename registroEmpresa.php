<?php
    session_start();
	

	$nombreEmpr=$_POST['nombreEmpresa'];
	$rutEmpr=$_POST['rutEmpresa'];
	$codigoEmpr= rand(100000,250000);
	$passEmpr=$_POST['passEmpresa'];
	$rpassEmpr=$_POST['rpassEmpresa'];
	$direccionEmpr=$_POST['direccionEmpresa'];

	
	require("connect_db.php");

	$checkRut = mysqli_query($mysqli,"SELECT * FROM EMPRESA WHERE rutEmpresa = '$rutEmpr'"); 

	

	$check_Rut=mysqli_num_rows($checkRut);
		if($passEmpr==$rpassEmpr){ //Primer if para comparar contraseñas
			if($check_Rut>0){ //si la query, entrega mas de un datos, se activa el "alert"
				echo ' <script language="javascript">
				alert("Atencion, ya existe el Rut designado para una empresa, Intente nuevamente");s
				</script> ';
			}else
			{
				 


				mysqli_query($mysqli, "INSERT INTO EMPRESA
				 VALUES('$codigoEmpr','$rutEmpr','$nombreEmpr','$passEmpr',
				 '$direccionEmpr')");
				//Inserta los datos a la tabla EMPRESA

				//echo ' <script language="javascript">
				//alert("Usuario registrado con éxito");
				//</script> ';

				echo "<script>
				location.href='login.php'
				</script>";
			}
		}else
		{
			echo 'las contraseñas no coinciden, porfavor intente nuevamente';
		}



?>