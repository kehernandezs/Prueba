<?php
	session_start();
		require("connect_db.php");

	$userPart=$_POST['usuarioParticular'];
  	$passPart=$_POST['passParticular'];


  	$sql=mysqli_query($mysqli,"SELECT * FROM PARTICULAR WHERE rutParticular = '$userPart'");
  	if ($f=mysqli_fetch_assoc($sql)) {
  		if ($passPart==$f['passwordParticular']){
  			$_SESSION['codigoParticular']=$f['codigoParticular'];
  			$_SESSION['nombreParticular']=$f['nombreParticular'];
  			$_SESSION['fonoParticular']=$f['fonoParticular'];

  			header("location: pagParticular.php");
  		}else{
  			echo '<script>
  		  alert(" CONTRASEÑA INCORRECTA ")
  		  </script> ';

  		  //Al tirar el error lo redirecciona a la pagina de login nuevamente
  		  echo "<script>   
			location.href='login.php'
			</script>";
  		}

  	}else{

  		echo '
  		<script>
  		alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE Y VUELVA A INTENTAR ")
  		</script> ';
		
		echo "<script>
		location.href='login.php'
		</script>";

  		}
  	


?>