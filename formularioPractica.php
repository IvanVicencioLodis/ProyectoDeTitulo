<?php
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="formulariopractica";

  $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

  if(!$enlace){
    echo"Errorr en la conexion con el servidor";
  }
?>
<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">


  </head>

  <body>

	<!-- <nav class="navbar navbar-dark bg-primary"> -->


	<nav class="navbar navbar-dark navbar-expand-sm bg-dark justify-content-center">

	    <a href="/" class="navbar-brand d-flex w-50 mr-auto">Control y gestión de prácticas </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="navbar-collapse collapse w-100" id="collapsingNavbar" >
	    	
	        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">

	        	<li class="nav-item active">
	                <a class="nav-link" href="index.php">Inicio</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="login.php">Iniciar sesion</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#">Contáctanos</a>
	            </li>
	            
	        </ul>


	    </div>

      
	</nav>
    <title>Formulario de inscripción para prácticas</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      margin: 3px 0;
      font-weight: 400;
      }
      h2 {
      margin: 3px 0;
      font-weight: 500;
      font-size: 20px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 50%;
      padding: 30px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input:hover, select:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .checkbox{
      display: flex;
      align-items: center;
      padding: 3px;


      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
    </style>
  </head>
  <body background="images/unabsede4.jpg" style="background-repeat: no-repeat; background-size: cover; background-position: center center">
    <div class="testbox">
      <form action="#" class="formulariopractica" id="formulariopractica" name="formulariopractica" method="POST">
        <h1 style= text-align:center><u><br>SOLICITUD PRÁCTICA</br></u></h1>
          <div id="logo" style="position:absolute; width:500px; height:200px; top: 70px; left: 520px">
          <img src="images/logounab.png" width="160" height="160"> </div>
          <div id="logo" style="position:absolute; width: 200px; height:200px; top: 70px; left: 1190px">
          <img src="images/infounab.png" width="190" height="90"> </div>
        <div class="item">
          <p><br><br>  </br></br></p>
          <p><br>Fecha:</br></p>
          <input type="date" name="fecha"  required/>
          <i class="fas fa-calendar-alt" style="top: 140px;" ></i>
          <br></br>
          <hr size="8px" color="black" />
        </div>
        <h2 style= text-align:left><br><u>Antecedentes personales estudiante</u></br></h2>
        <div class="item">
          <p></p>
          <div>
          <p>Apellido materno:</p>
          <input type="text" name="apMaterno" required />
          <p>Apellido paterno:</p>
          <input type="text" name="apPaterno" required/>
          <p>Nombres:</p>
          <input type="text" name="nombres" required/>
          </div>
        </div>
        <div class="item">
          <p>Rut:</p>
          <input type="text" name="rut" required/>
          <p>Correo institucional:</p>
          <input type="text" name="correoIns"/>
          <p>Correo personal:</p>
          <input type="text" name="correoPer"/>
          <p>Comuna en la que reside:</p>
          <input type="text" name="comuna"/>
          <div class = "checkbox">
              <p>Plan paso a paso actual de su comuna:</p>
              <input type="checkbox" name="paso" value="paso1">Paso 1 (Cuarentena)</input>
              <input type="checkbox" name="paso" value="paso2">Paso 2 (Transición)</input>
              <input type="checkbox" name="paso" value="paso1">Paso 3 (Preparación)</input>
              <input type="checkbox" name="paso" value="paso2">Paso 4 (Apertura)</input>
          </div>
          <p><br>Fono móvil / Fono fijo:</br></p>
          <input type="text" name="fono"/>
        </div>  
        <div class="btn-block">
          <input class="btn" type="submit" name="siguiente" style="border: #000 1px solid; background-color: #56BAF9" value="Siguiente">
          <a href="index.php"><input type="button" style="border: #000 1px solid; background-color: #56BAF9" value="Atras"></a>
        </div>
      </form>
      <footer id="sticky-footer" class="py-1 bg-dark navbar-dark text-white-50" style="position: fixed; height: 36px; bottom: 0; width: 100%;">
      <div class="container text-center ">
        <small>Iván Vicencio &copy; versión 1.0</small>
      </div>
  	</footer>

<?php

  if(isset($_POST['siguiente'])){
    $fecha = $_POST["fecha"];
    $apMaterno = $_POST["apMaterno"];
    $apPaterno = $_POST["apPaterno"];
    $nombres = $_POST["nombres"];
    $rut = $_POST["rut"];
    $correoIns = $_POST["correoIns"];
    $correoPer = $_POST["correoPer"];
    $comuna = $_POST["comuna"];
    $paso = $_POST["paso"];
    $fono = $_POST["fono"];

    $insertarDatos = "INSERT INTO antecedentespersonalesestudiante VALUES('$fecha',
                                                                            '$apMaterno',
                                                                            '$apPaterno',
                                                                            '$nombres',
                                                                            '$rut',
                                                                            '$correoIns',
                                                                            '$correoPer',
                                                                            '$comuna',
                                                                            '$paso',
                                                                            '$fono')";
    $ejecutarInserztar = mysqli_query($enlace, $insertarDatos);
    if (isset($_POST['paso'])){
      echo $_POST['paso']; // Muestra el CheckBox marcado.
      }

    
  }
?>