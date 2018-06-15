<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="fonts/style.css">

  <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
         <center> <h1>Empresa <?php
            session_start();
           echo $_SESSION['nombreEmpresa']; 
           ?>
           </h1>
         </center>
	<div class="container">
            
            <section>
                <div class="row">
                    <div class="col">
                        
                        <h2>FORMULARIO ANALISIS</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                              <form action="registroContacto.php" method="post">
                                <h5 class="card-title">Datos Personales</h5>
                                
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Nombre Paciente :</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="nombreCon"  placeholder="Nombre Paciente">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Rut:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="rutCon" placeholder="Rut Paciente">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Email:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="email" name="emailCont"  placeholder="incapaz@constructora.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Teléfono Contacto:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input name="fonoCont" type="text"  placeholder="5254825">
                                        </div>
                                    </div>
                          

                                    <h5 class="card-title">Datos Analisis</h5><br>
                                
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Tipo Analisis :</p>
                                        </div>
                                        <div class="col-lg-8">
                                            
                                          <select name="analisisCon"> 
                                            <option value="1">detección de micotoxinas</option>
                                            <option value="2"> detección de
                                bacterias nocivas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Cantidad Gramos:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="cantGramos"  placeholder="200">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Centimetros Cubicos:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="centCubicos" placeholder="3.5">
                                        </div>
                                    </div>
                                    <br>
                                    
                                            <input type="submit" class="btn btn-primary" name="submit" value="Guardar" />
                                        <input type="reset" class="btn btn-danger" name="submit" value="Limpiar" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
              
                </div>
            </section>
        </div>

<?php

include('pieDePagina.php');
?>