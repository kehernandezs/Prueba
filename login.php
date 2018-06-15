<?php
  include('encabezado.php');
?>
<body>
	
<center><font size=50>Hospital Pelotillehue</font></center>
<center>El usuario es el Rut de la Empresa o Particular</center>


  <div class="form">
      
      <!-- <form method="post" action=""> -->
          <ul class="tab-group">
          <li class="tab active"><a href="#login-empresa">Ingreso Empresa</a></li>
          <li class="tab"><a href="#login-particular">Ingreso Particular</a></li>
          </ul> -->
      
       <div class="tab-content">
        
        <div id="login-empresa">   
          <h1>INGRESO EMPRESA</h1>
          
          <form action="validarEmpresa.php" method="post">
          
            <div class="field-wrap">
              <label>
                Usuario <span class="req">*</span>
              </label>
              <input type="text" name="usuarioEmpresa" required autocomplete="off"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Contraseña <span class="req">*</span>
              </label>
              <input type="password" name="passEmpresa" required autocomplete="off"/>
            </div>
          
             <input type="submit" class="button button-block" name="submit" value="INGRESAR" />

            
            </form>
           </div> 

          <!-- MITAD TAB-GROUP-->
           
        <div id="login-particular">   
          <h1>INGRESO PARTICULAR</h1>
          <form action="validarParticular.php" method="post">
          
          
            <div class="field-wrap">
              <label>
                Usuario <span class="req">*</span>
              </label>
              <input type="text" name="usuarioParticular" required autocomplete="off"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Contraseña <span class="req">*</span>
              </label>
              <input type="password" name="passParticular" required autocomplete="off"/>
            </div>
          

             <input type="submit" class="button button-block" name="submit" value="INGRESAR" />


        </div>
       </form> 
      </div>-->  <!-- tab-content -->
      
    
<?php
include('pieDePagina.php');
?>