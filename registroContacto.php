<?php
   //Contacto
session_start(); //$_SESSION['codigoEmpresa'];
	$nombreCon=$_POST['nombreCon'];
	$rutCon=$_POST['rutCon'];
	$emailCont=$_POST['emailCont'];
	$fonoCont=$_POST['fonoCont'];
	$codigoEmp=$_SESSION['codigoEmpresa'];


   //Analisis
	$tipo=$_POST['analisisCon'];
	$cantGramos=$_POST['cantGramos'];
	$centCubicos=$_POST['centCubicos'];
	//$hoy = date("F j, Y, g:i a");
	//$fechaActual = implode($fecha);
	//TomaR FECHADEHOY
	


//cambiar
	require("connect_db.php");

	$checkRut = mysqli_query($mysqli,"SELECT * FROM CONTACTO WHERE rutContacto = '$rutCon'"); 

	

	$check_Rut=mysqli_num_rows($checkRut);
			if($check_Rut>0){ //si la query, entrega mas de un datos, se activa el "alert"
				echo ' <script language="javascript">
				alert("Atencion, ya existe el Rut designado para un paciente en esta o otra empresa");
				</script> ';

				

			}else
			{
				 mysqli_query($mysqli, "INSERT INTO CONTACTO
				 VALUES('$rutCon','$nombreCon','$emailCont','$fonoCont',
				 '$codigoEmp')");


				mysqli_query($mysqli, "INSERT INTO ANALISISMUESTRAS ( fechaRecepcion, cantidadMuestra, centimetrosCubicos, Empresa_codigoEmpresa,tipoAnalisis)
				 VALUES('SYSDATE()'
				 ,'$cantGramos'
				 ,'$centCubicos'
				 ,'$codigoEmp'
				 ,'$tipo')");
				//Inserta los datos a la tabla EMPRESA

				echo ' <script language="javascript">
				alert("Analisis registrado con éxito");
				</script>';

				echo "<script>
				location.href='pagEmpresa.php'
				</script>";
			}
?>