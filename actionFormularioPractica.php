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

?>


<script>
    window.location.href = "http://localhost/ProyectoTitulo/formularioPractica2.php";
</script>

</body>
</html>