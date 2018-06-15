<?php
include('encabezado.php');
?>

<body>

 
  <center><font size=50>Hospital Pelotillehue</font></center>
  


  <div class="form">
            <!-- <form method="post" action=""> -->
          <ul class="tab-group">
          <li class="tab active"><a href="#signup-empresa">Registro Empresa</a></li>
          <li class="tab"><a href="#signup-particular">Registro Particular</a></li>
          </ul>
      
      <div class="tab-content">
        <div id="signup-empresa">   
          <h1>REGISTRO EMPRESA</h1>
          
          <form action="registroEmpresa.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre Empresa<span class="req">*</span>
              </label>
              <input type="text" name="nombreEmpresa" required autocomplete="off"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Rut Empresa<span class="req">*</span>
              </label>
              <input type="text" name="rutEmpresa" required autocomplete="off"/>
            </div>
          </div>
           
          
           
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="passEmpresa" required autocomplete="off" />
          </div>


          <div class="field-wrap">
            <label>
              Repita Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="rpassEmpresa" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
              <label>
                Direccion Empresa<span class="req">*</span>
              </label>
              <input type="text" name="direccionEmpresa" required autocomplete="off"/>
            </div>

             <input type="submit" class="button button-block" name="submit" value="Guardar" />

            <?php
                if(isset($_POST['submit'])){
                require("registroEmpresa.php");
                }

            ?>
          </form>
          </div>
        
        
           
        <div id="signup-particular">   
          <h1>REGISTRO PARTICULAR</h1>
          <form action="registroParticular.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre Particular <span class="req">*</span>
              </label>
              <input type="text" name="nombreParticular" required autocomplete="off"/>
            </div>
            <!-- Codigo Partiocular: Arreglar para que tome los primeros 3 digitos del rut de empresa y los 2 ultimas letras del nombre -->

            <div class="field-wrap">
              <label>
                Rut <span class="req">*</span>
              </label>
              <input type="text" name="rutParticular" required autocomplete="off"/>
            </div>
          </div>
            
            <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="passParticular" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label>
              Repita Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="rpassParticular" required autocomplete="off"/>
          </div>     

          <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
              <input type="email" name="emailParticular" required autocomplete="off" />
            </div>
          

          <div class="field-wrap">
              <label>
                Direccion Particular<span class="req">*</span>
              </label>
              <input type="text" name="direccionParticular"  required autocomplete="off" />
            </div>

        

            
            <div class="field-wrap">
              <label>
                Telefono Contacto<span class="req">*</span>
              </label>
              <input type="text" name="fonoParticular"  required autocomplete="off" />
            </div>
  
          
          <input type="submit" class="button button-block" name="submit2" value="Guardar" />

          <?php
                if(isset($_POST['submit2'])){
                require("registroParticular.php");
                }

            ?>

        </div>-->
        </form>
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<?php

include('pieDePagina.php');
?>
