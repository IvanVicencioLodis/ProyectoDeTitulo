
<?php

    $conexion=mysqli_connect("localhost","root","","formulariopractica");

?>

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
      width: 90%;
      padding: 20px;
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

      body {
	background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
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

      <form action="actionPracticasSolicitiadas.php" class="actionPracticasSolicitiadas" id="actionPracticasSolicitiadas" name="actionPracticasSolicitiadas" method="POST">

        <h2 style= text-align:center><br><b>A continuación se mostraran los datos de los estudiantes que han llenado el formulario para solicitar su práctica profesional, y finalmente deberá modificar el estado de ésta, aceptar o rechazar.</b></br></h2>
        <h2 style= text-align:center><br><u>ANTECEDENTES PERSONALES ESTUDIANTE</u></br></h2>
        <br>

        
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Apellido Materno</th>
                    <th>Apellido Paterno</th>
                    <th>Nombres</th>    
                    <th>Rut</th>
                    <th>Correo institucional</th>
                    <th>Correo personal</th>
                    <th>Comuna</th>
                    <th>Paso Minsal</th>
                    <th>Fono</th>
                   
                </tr>
            </thead>
            <?php

            $sql="SELECT * from antecedentespersonalesestudiante";
            $result=mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result)){

        
            ?>
            <tbody>
            <tr>
                <td><?php echo $mostrar['Fecha']?></td>
                <td><?php echo $mostrar['ApellidoMaterno']?></td>
                <td><?php echo $mostrar['ApellidoPaterno']?></td>
                <td><?php echo $mostrar['Nombres']?></td>
                <td><?php echo $mostrar['Rut']?></td>
                <td><?php echo $mostrar['CorreoInstitucional']?></td>
                <td><?php echo $mostrar['CorreoPersonal']?></td>
                <td><?php echo $mostrar['ComunaReside']?></td>
                <td><?php echo $mostrar['PasoMinsal']?></td>
                <td><?php echo $mostrar['Fono']?></td>
               
            </tr>
        <?php
        }
    ?>
        </tbody>
    </table>

        <h2 style= text-align:center><br><u>ANTECEDENTES ACADÉMICOS ESTUDIANTE</u></br></h2>
        <br>
        
        <table border = "1">
            <tr>
                <th>Carrera que cursa</th>
                <th> Tipo autorización práctica</th>
                <th> Semestres cursados completamente</th>
                <th>Semestres asignaturas aprobadas</th>    
                <th>Tipo de práctica</th>
            </tr>
            <?php

            $sql="SELECT * from antecedentesacademicosestudiante";
            $result=mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result)){

        
            ?>

            <tr>
                <td><?php echo $mostrar['queCarrera']?></td>
                <td><?php echo $mostrar['tipoAutorizacionPractica']?></td>
                <td><?php echo $mostrar['semestresCursadosCompletamente']?></td>
                <td><?php echo $mostrar['semestresAsigAprobadas']?></td>
                <td><?php echo $mostrar['tipoPractica']?></td>
            </tr>
        <?php
        }
    ?>
            
        </table>

        <h2 style= text-align:center><br><u>ANTECEDENTES EMPRESA</u></br></h2>
        <br>

        <table border = "1">
            <tr>
                <th>Nombre</th>
                <th> Rut</th>
                <th> Giro</th>
                <th>Dirección</th>    
                <th>Comuna</th>
                <th> Plan paso a paso Minsal</th>
                <th>Fono</th>    
                <th>Nombres supervisor</th>
                <th> Apellidos supervisor</th>
                <th>Cargo supervisor</th>    
                <th>Correo supervisor</th>
                <th> Teléfono supervisor</th>
                <th>Dirección presencial práctica</th>    
                <th>Plan paso a paso presencial práctica</th>
                <th>Teléfono contacto lugar práctica</th>
            </tr>
            <?php

            $sql="SELECT * from antecedentesempresa";
            $result=mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result)){

        
            ?>

            <tr>
                <td><?php echo $mostrar['Nombre']?></td>
                <td><?php echo $mostrar['Rut']?></td>
                <td><?php echo $mostrar['Giro']?></td>
                <td><?php echo $mostrar['Direccion']?></td>
                <td><?php echo $mostrar['Comuna']?></td>
                <td><?php echo $mostrar['planPasoMinsal']?></td>
                <td><?php echo $mostrar['Fono']?></td>
                <td><?php echo $mostrar['NombresSupervisor']?></td>
                <td><?php echo $mostrar['ApellidosSupervisor']?></td>
                <td><?php echo $mostrar['CargoSupervisor']?></td>
                <td><?php echo $mostrar['CorreoSupervisor']?></td>
                <td><?php echo $mostrar['TelefonoSupervisor']?></td>
                <td><?php echo $mostrar['DireccPresencialPract']?></td>
                <td><?php echo $mostrar['PlanPrescMinsal']?></td>
                <td><?php echo $mostrar['TelefonoContactoLugarPract']?></td>
            </tr>
        <?php
        }
    ?>
            
        </table>

        <h2 style= text-align:center><br><u> ACTIVIDADES A DESARROLLAR EN PRÁCTICA</u></br></h2>
        <br>

        <table border = "1">
            <tr>
                <th>Cargo a desempeñar</th>
                <th> Actividades a desarrollar</th>

            </tr>
            <?php

            $sql="SELECT * from actividadesadesarrollarenpractica";
            $result=mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result)){

        
            ?>

            <tr>
                <td><?php echo $mostrar['CargoADesempeñar']?></td>
                <td><?php echo $mostrar['ActividadesADesarrollar']?></td>
            </tr>
        <?php
        }
    ?>
            
        </table>
        
        <h2 style= text-align:center><br><u>MODIFICAR ESTADO DE PRÁCTICA</u></br></h2>

        <p><b>Ingrese el rut del alumno(sin puntos ni guión):</b></p>
          <input type="text" name="rutAlumno" required/>
        <p style="color:#069"><b>Seleccione el estado de la práctica del alumno </b></p>
                <input type="checkbox" name="estadoPractica" value="Práctica aceptada"><b style="color:#008000">Aceptar práctica</b></input>
                <input type="checkbox" name="estadoPractica" value="Práctica rechazada"><b style="color:#FF0000">Rechazar práctica</b></input>



        <div class="btn-block">
          <input class="btn" type="submit" name="guardarCambios" style="border: #000 1px solid; background-color: #56BAF9" value="Guardar cambios">
          <a href="index.php"><input type="button" style="border: #000 1px solid; background-color: #56BAF9" value="Atras"></a>
        <p><br></br></p>
        </div>
      </form>
      
      <footer id="sticky-footer" class="py-1 bg-dark navbar-dark text-white-50" style="position: fixed; height: 36px; bottom: 0; width: 100%;">
      <div class="container text-center ">
        <small>Iván Vicencio &copy; versión 1.0</small>
      </div>
  	</footer>