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

      <form action="actionFormularioPractica2.php" class="formulariopractica2" id="formulariopractica2" name="formulariopractica2" method="POST">

        <h1 style= text-align:center><u><br>SOLICITUD PRÁCTICA</br></u></h1>
          <div id="logo" style="position:absolute; width:500px; height:200px; top: 70px; left: 395px">
          <img src="images/logounab.png" width="130" height="130"> </div>
          <div id="logo" style="position:absolute; width: 200px; height:200px; top: 70px; left: 970px">
          <img src="images/infounab.png" width="150" height="50"> </div>
        <h2 style= text-align:left><br><u>ANTECEDENTES ACADEMICOS ESTUDIANTE</u></br></h2>
       
        <div class = "checkbox">
              <p><br>Seleccione la carrerra a la que pertenece:</p></br>
              <input type="checkbox" name="queCarrera" value="Ingenería Civil Informática">Ingenería Civil Informática</input>
              <input type="checkbox" name="queCarrera" value="Ingeniería en Computación e Informática">Ingeniería en Computación e Informática</input>

          </div>

          <div class = "checkbox">
              <p><br>Seleccione la práctica en la que solicita autorización:</p></br>
              <input type="checkbox" name="tipAutoPractica" value="Pre-Profesional 1 o Práctica temprana">Pre-Profesional 1 o Práctica temprana</input>
              <input type="checkbox" name="tipAutoPractica" value="Pre-Profesional 2 o práctica profesional">Pre-Profesional 2 o práctica profesional</input>

          </div>

          <div>
              <p>Escriba los semestres que tenga cursados completamente(separados por un guión): </p>
              <input type="text" name="semCursadoCompl" required />

          </div>

          <div>
              <p>Escriba los semestres que tenga asignaturas aprobadas: </p>
              <input type="text" name="semAsigAprobadas" required />

          </div>

          <div class = "checkbox">
              <p><br>Seleccione el tipo de práctica: </p></br>
              <input type="checkbox" name="tipoPractica" value="Remota">Remota</input>
              <input type="checkbox" name="tipoPractica" value="Presencial">Presencial</input>
              <input type="checkbox" name="tipoPractica" value="Mixta">Mixta</input>

          </div>

        <div class="btn-block">
          <input class="btn" type="submit" name="siguiente1" style="border: #000 1px solid; background-color: #56BAF9" value="Siguiente">
          <a href="index.php"><input type="button" style="border: #000 1px solid; background-color: #56BAF9" value="Atras"></a>
        </div>
      </form>
      
      <footer id="sticky-footer" class="py-1 bg-dark navbar-dark text-white-50" style="position: fixed; height: 36px; bottom: 0; width: 100%;">
      <div class="container text-center ">
        <small>Iván Vicencio &copy; versión 1.0</small>
      </div>
  	</footer>
