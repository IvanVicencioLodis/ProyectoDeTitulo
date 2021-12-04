<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Inicio</title>

    <link rel="shortcut icon" href="images/logoUnabicono.ico">
  </head>

  <body>

	<!-- <nav class="navbar navbar-dark bg-primary"> -->

  <style>
body {
  background-image: url("images/unabsede4.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

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
  <footer id="sticky-footer" class="py-1 bg-dark navbar-dark text-white-50" style="position: fixed; height: 36px; bottom: 0; width: 100%;">
      <div class="container text-center ">
        <small>Copyright &copy; Iván Vicencio Lodis</small>
      </div>
  	</footer>
    <div class="testbox">
      <form action="" method="POST">
        <h1 style= text-align:center><u>Bienvenidos al sistema de control y gestión de prácticas</u></h1>
        <h2 style= text-align:center><br>Para poder saber los requisitos que necesita para poder optar a su práctica profesional, deberá ingresar su rut a continuación</br></h2>
        <div class="item">
          <p></p>
          <div>
          <p>Ingrese su rut(sin puntos ni guión): </p>
          <input type="text" name="buscar" id="busqueda" placeholder="ej: 202385125" name="rut"/>
        </div>
        <div class="btn-block">
        <a><input type="submit" value="Buscar" name="btn" style="border: #000 1px solid; background-color: #56BAF9" value="Buscar"></a>

      <footer id="sticky-footer" class="py-1 bg-dark navbar-dark text-white-50" style="position: fixed; height: 36px; bottom: 0; width: 45.7%;">
      <div class="container text-center ">
        <small>Iván Vicencio &copy; versión 1.0</small>
      </div>
  	  </footer>
        </div>
      </form>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

      <?php
        $servidor="localhost";
        $usuario="root";
        $clave="";
        $baseDeDatos="formulariopractica";
        
        $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
        $db=mysqli_select_db($enlace,'alumnos');

        if(!$enlace){
          echo"Errorr en la conexion con el servidor";
        }
        if(isset($_POST['btn'])){
          $Rut=$_POST['buscar'];
          
          $query="SELECT * FROM alumnos WHERE Rut='$Rut' ";

          $result=mysqli_query($enlace, $query);
         
          while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
      

          {

          
    
  
            ?>
            
            <h2 style= text-align:center>Bienvenidos <b style="color:#069">"<?php echo $row['Nombres'] ?> <?php echo $row['Apellidos'] ?>"</b> a la consulta de requisitos para la inscripccion de tu práctica!<br></h2></br>
            <h2 style= text-align:left>Sus datos son los siguientes: <br></h2></br>
            <p>Rut:</p>
            <input type="text" name="Rut" value="<?php echo $row['Rut'] ?> "/>
            <p>Nombres:</p>
            <input type="text" name="Nombres" value="<?php echo $row['Nombres'] ?> "/>
            <p>Apellidos</p>
            <input type="text" name="Apellidos" value="<?php echo $row['Apellidos'] ?> "/>
            <p>Carrera:</p>
            <input type="text" name="Carrera" value="<?php echo $row['Carrera'] ?> "/>
            <p>Tipo de malla:</p>
            <input type="text" name="tipoMalla" value="<?php echo $row['tipoMalla'] ?> "/>
            
            <?php
                $RutAlumno=$_POST['buscar'];
           
                $query2="SELECT * FROM estadopractica WHERE RutAlumno='$RutAlumno' ";
                        
                $result2=mysqli_query($enlace, $query2);
                     
                while($row=mysqli_fetch_array($result2, MYSQLI_ASSOC))
            {
              ?>
            
            <p style="color:#069"><b>Estado de su práctica:</b></p>
            <input type="text" face="tahoma" name="estadoPractica" style="color:#069" value="<?php echo $row['estadoPractica'] ?> "/>

            
  
            

            <?php
            
          }
          
        }
        }
        ?>
        
        

      









