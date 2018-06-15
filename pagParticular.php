<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <ul class="nav navbar-nav">
      <li class="active"><a href="pagParticular.php">Ver Registro</a></li>
      <li><a href="formularioAnalisisParticular.php">Ingresar Nuevo Analisis</a></li>
      <li><a href="desconectar.php">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>


<h4> Nombre Empresa: 
     <?php
     	session_start();
      
     	require("connect_db.php");
      echo $_SESSION['nombreParticular']; 
      ?><br>
      Codigo Particular:
      <?php
      $cod=$_SESSION['codigoParticular'];
      echo $_SESSION['codigoParticular'];
      ?><br>
      </h4>

       <!-- PACIENTES VINCULADOS A ESTA EMPRESA -->
              

             
                <h2> 
               Analisis de <?php echo $_SESSION['nombreParticular'] ?>             
              </h2>

             <div class="row-fluid">
              <?php

                echo "<table border='1'; class='table table-hover';>";
                echo "<tr class='warning'>";
                echo "<td>ID Analisis </td>";
                echo "<td>Rut Paciente</td>";
                echo "<td>Email Paciente</td>";
                echo "<td>Fecha  Recepcion</td>";
                echo "<td>Cantidad  Muestra</td>";
                echo "<td>Centímetros  Cúbicos</td>";
                echo "<td>Tipo  Analisis</td>";
                
                

                        
              echo "</tr>";
              ?>
              <?php
              $sql = "SELECT
              CASE tipoAnalisis
                    WHEN 1 THEN 'detección de micotoxinas'
                    WHEN 2 THEN 'detección de
                                  bacterias nocivas'
              END AS tipo,
              idAnalisisMuestras,
              rutParticular,
              emailParticular,
              fechaRecepcion,
              cantidadMuestra,
              centimetrosCubicos
              FROM ANALISISMUESTRAS, PARTICULAR
              WHERE Particular_codigoParticular = '$cod'
              AND codigoParticular = '$cod'";
              $result = mysqli_query($mysqli, $sql);

              while($mostrar = mysqli_fetch_array($result)){
              ?>

              <tr>
                <td><?php echo $mostrar['idAnalisisMuestras']; ?></td>
                <td><?php echo $mostrar['rutParticular']; ?></td>
                <td><?php echo $mostrar['emailParticular']; ?></td>
                <td><?php echo $mostrar['fechaRecepcion']; ?></td>
                <td><?php echo $mostrar['cantidadMuestra']; ?></td>
                <td><?php echo $mostrar['centimetrosCubicos']; ?></td>
                <td><?php echo $mostrar['tipo']; ?></td>

                
                
                

                
              </tr>
              <?php
             }
              ?>
               </table><br>



               <h2> 
               Particulares Registrados              
              </h2>

             <div class="row-fluid">
              <?php

              echo "<table border='1'; class='table table-hover';>";
              echo "<tr class='warning'>";
                echo "<td>Codigo Particular </td>";
                echo "<td>Rut Particular</td>";
                echo "<td>Nombre Particular</td>";
                echo "<td>Email Particular</td>";
                echo "<td>Direccion Particular</td>";

                        
              echo "</tr>";
              ?>
              <?php
              $sql2 = "SELECT * FROM PARTICULAR";
              $result2 = mysqli_query($mysqli,$sql2);

              while($mostrar2=mysqli_fetch_array($result2)){
              ?>

              <tr>
                <td><?php echo $mostrar2['codigoParticular']; ?></td>
                <td><?php echo $mostrar2['rutParticular']; ?></td>
                <td><?php echo $mostrar2['nombreParticular']; ?></td>
                <td><?php echo $mostrar2['emailParticular']; ?></td>
                <td><?php echo $mostrar2['direccionParticular']; ?></td>

                
              </tr>
              <?php
             }
              ?>
               </table><br>



             
      

                <!-- EMPRESAS -->

              <h2> 
               Empresas Registradas              
              </h2>
             <div class="row-fluid">
              <?php

              echo "<table border='1'; class='table table-hover';>";
              echo "<tr class='warning'>";
                echo "<td>Codigo Empresa </td>";
                echo "<td>Rut Empresa</td>";
                echo "<td>Nombre Empresa</td>";
                echo "<td>Direccion Empresa</td>";
                        
              echo "</tr>";
              ?>
              <?php
              $sql = "SELECT * FROM EMPRESA";
              $result = mysqli_query($mysqli,$sql);

              while($mostrar=mysqli_fetch_array($result)){
              ?>

              <tr>
                <td><?php echo $mostrar['codigoEmpresa']; ?></td>
                <td><?php echo $mostrar['rutEmpresa']; ?></td>
                <td><?php echo $mostrar['nombreEmpresa']; ?></td>
                <td><?php echo $mostrar['direccionEmpresa']; ?></td>
                
              </tr>
              <?php
             }
              ?>
               </table><br>

  						
  			<h2> 
               Pacientes Vinculados a una Empresa              
              </h2>

             <div class="row-fluid">
              <?php

              echo "<table border='1'; class='table table-hover';>";
              echo "<tr class='warning'>";
                echo "<td>Nombre Paciente </td>";
                echo "<td>Rut Paciente</td>";
                echo "<td>Email  Paciente</td>";
                echo "<td>Telefono Paciente</td>";
                echo "<td>Nombre Empresa Perteneciente</td>";

                        
              echo "</tr>";
              ?>
              <?php
              $sql3 = "SELECT 
                        nombreContacto,
                        rutContacto,
                        emailContacto,
                        telefonoContacto,
                        nombreEmpresa
               FROM CONTACTO , EMPRESA
               WHERE Empresa_codigoEmpresa = codigoEmpresa";
              $result3 = mysqli_query($mysqli,$sql3);

              while($mostrar3=mysqli_fetch_array($result3)){
              ?>

              <tr>
                <td><?php echo $mostrar3['nombreContacto']; ?></td>
                <td><?php echo $mostrar3['rutContacto']; ?></td>
                <td><?php echo $mostrar3['emailContacto']; ?></td>
                <td><?php echo $mostrar3['telefonoContacto']; ?></td>
                <td><?php echo $mostrar3['nombreEmpresa']; ?></td>

                
              </tr>
              <?php
             }
              ?>
               </table>
<br>
  

         
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</html>