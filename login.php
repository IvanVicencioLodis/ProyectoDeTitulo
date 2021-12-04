<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/logoUnabicono.ico">
    <title>Iniciar sesión</title>
    


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

    <!-- Default form login -->
    <form class="text-center border border-light p-5" action="validar.php" method="post">

        <p class="h4 mb-4">Iniciar sesión</p>

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Correo electrónico" name="correo">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña" name="contraseña">

        <div class="d-flex justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Recordar contraseña</label>
                </div>
            </div>
            <div>
                <!-- Forgot password -->
                <a href="">Olvidaste tu contraseña?</a>
            </div>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit" value="ingresar">Iniciar sesión</button>

    </form>
    <!-- Default form login -->



    <!-- fin -->

    <!-- JQuery -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

</body>
<footer id="sticky-footer" class="py-1 bg-dark navbar-dark text-white-50" style="position: fixed; height: 36px; bottom: 0; width: 100%;">
      <div class="container text-center ">
        <small>Ivan Vicencio &copy; versión 1.0</small>
      </div>
  	</footer>


</html>