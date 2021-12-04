<html>
<body>

<?php

$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulariopractica";

$enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

if(!$enlace){
  echo"Errorr en la conexion con el servidor";
}


$rutAlumno = $_POST["rutAlumno"];
$estadoPractica = $_POST["estadoPractica"];

$insertarDatos = "INSERT INTO estadopractica VALUES('$rutAlumno','$estadoPractica')";
$ejecutarInserztar = mysqli_query($enlace, $insertarDatos);

?>


<script>
    window.location.href = "http://localhost/ProyectoTitulo/formularioPracticaGuardado.php";
</script>

</body>
</html>