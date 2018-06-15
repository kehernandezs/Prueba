<?php

  session_start();
  	require("connect_db.php");


  	$userEmpresa=$_POST['usuarioEmpresa'];
  	$passEmpresa=$_POST['passEmpresa'];
    



  	$sql=mysqli_query($mysqli,"SELECT * FROM EMPRESA WHERE rutEmpresa = '$userEmpresa'");
  	if($f=mysqli_fetch_assoc($sql)){
  		if ($passEmpresa==$f['passwordEmpresa']){
  		  $_SESSION['codigoEmpresa']=$f['codigoEmpresa'];
  		  $_SESSION['nombreEmpresa']=$f['nombreEmpresa'];
  		  //$_SESSION['direccionEmpresa']=$f['direccionEmpresa'];
  		  //header("Location: pagContacto.php");
        echo "<script>
      location.href='pagEmpresa.php'
      </script>";
       // lo redirecciona a esta pag para agregar pacientes vinculados con la empresa
  		}else{
  		  echo '<script>
  		  alert(" CONTRASEÑA INCORRECTA ")
  		  </script> ';
		
			echo "<script>
			location.href='login.php'
			</script>";
  		}
  	}else{
  		echo '
  		<script>
  		alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE O VUELVA A INTENTAR ")
  		</script> ';
		
		echo "<script>
		location.href='login.php'
		</script>";
  	}
  	
?>