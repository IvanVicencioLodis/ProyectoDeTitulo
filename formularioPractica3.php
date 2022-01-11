<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/logoUnabicono.ico">
    <title>Formulario práctica</title>


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
	                <a class="nav-link" href="verEstadoPractica.php">Ver estado práctica</a>
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
  <style>
  body {
  background-image: url("images/unabsede4.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  }
  </style>
  </head>
  <body background="images/unabsede4.jpg" style="background-repeat: no-repeat; background-size: cover; background-position: center center">
    <div class="testbox">

      <form action="actionFormularioPractica3.php" class="formulariopractica3" id="formulariopractica3" name="formulariopractica3" method="POST">

        <h1 style= text-align:center><u><br>SOLICITUD PRÁCTICA</br></u></h1>
          <div id="logo" style="position:absolute; width:500px; height:200px; top: 70px; left: 395px">
          <img src="images/logounab.png" width="130" height="130"> </div>
          <div id="logo" style="position:absolute; width: 200px; height:200px; top: 70px; left: 970px">
          <img src="images/infounab.png" width="150" height="50"> </div>
        <h2 style= text-align:left><br><u>ANTECEDENTES EMPRESA</u></br></h2>
        <div class="item">
          <p></p>
          
          <div>
          <p>Nombre empresa:</p>
          <input type="text" name="nombreEmpresa" required />
          <p>Rut:</p>
          <input type="text" name="rutEmpresa" required/>
          <p>Giro:</p>
          <input type="text" name="giroEmpresa" />
          <p>Direccion:</p>
          <input type="text" name="direccionEmpresa" />
          <p>Comuna:</p>
          <input type="text" name="comunaEmpresa" />
          </div>
        </div>
         
        <div class = "checkbox">
              <p>Plan paso a paso(MinSal) actual de la comuna:</p>
              <input type="checkbox" name="paso1" value="Paso 1 (Cuarentena)">Paso 1 (Cuarentena)</input>
              <input type="checkbox" name="paso1" value="Paso 2 (Transicion)">Paso 2 (Transición)</input>
              <input type="checkbox" name="paso1" value="Paso 3 (Preparacion)">Paso 3 (Preparación)</input>
              <input type="checkbox" name="paso1" value="Paso 4 (Apertura)">Paso 4 (Apertura)</input>
          </div>
          
          <p><br>Fono:</br></p>
          <input type="text" name="fonoEmpresa"/>
          <p>Nombre(s) supervisor:</p>
          <input type="text" name="nombreSupervisor"/>
          <p>Apellidos supervisor:</p>
          <input type="text" name="apellidoSupervisor"/>
          <p>Cargo que ocupa supervisor:</p>
          <input type="text" name="cargoSupervisor"/>
          <p>Correo supervisor:</p>
          <input type="text" name="correoSupervisor"/>
          <p>Teléfono supervisor:</p>
          <input type="text" name="telefonoSupervisor"/>
          <p><i><b><br>Si la práctica es presencial o mixta</br><i></b></p>
          <p><br>Dirección donde se realizara la práctica:</br></p>
          <input type="text" name="direccionDePractica"/>
          
          <div class = "checkbox">
              <p>Plan paso a paso(MinSal) actual de la comuna:</p>
              <input type="checkbox" name="paso2" value="Paso 1 (Cuarentena)">Paso 1 (Cuarentena)</input>
              <input type="checkbox" name="paso2" value="Paso 2 (Transicion)">Paso 2 (Transición)</input>
              <input type="checkbox" name="paso2" value="Paso 3 (Preparacion)">Paso 3 (Preparación)</input>
              <input type="checkbox" name="paso2" value="Paso 4 (Apertura)">Paso 4 (Apertura)</input>
          </div>
          
          <p><br>Teléfono de contacto lugar de práctica:</br></p>
          <input type="text" name="telefonoLugarPractica"/>
        
          <div class="btn-block">
            <input class="btn" type="submit" name="siguiente2" style="border: #000 1px solid; background-color: #56BAF9" value="Siguiente">
            <a href="index.php"><input type="button" style="border: #000 1px solid; background-color: #56BAF9" value="Atras"></a>
          </div>
      </form>
    </div>
    <footer id="sticky-footer" class="py-1 bg-dark navbar-dark text-white-50" style="position: fixed; height: 36px; bottom: 0; width: 100%;">
      <div class="container text-center ">
        <small>Iván Vicencio &copy; versión 1.0</small>
      </div>
  	</footer>