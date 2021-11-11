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


$nombreEmpresa = $_POST["nombreEmpresa"];
$rutEmpresa = $_POST["rutEmpresa"];
$giroEmpresa = $_POST["giroEmpresa"];
$direccionEmpresa = $_POST["direccionEmpresa"];
$comunaEmpresa = $_POST["comunaEmpresa"];
$paso1 = $_POST["paso1"];
$fonoEmpresa = $_POST["fonoEmpresa"];
$nombreSupervisor = $_POST["nombreSupervisor"];
$apellidoSupervisor = $_POST["apellidoSupervisor"];
$cargoSupervisor = $_POST["cargoSupervisor"];
$correoSupervisor = $_POST["correoSupervisor"];
$telefonoSupervisor = $_POST["telefonoSupervisor"];
$direccionDePractica = $_POST["direccionDePractica"];
$paso2 = $_POST["paso2"];
$telefonoLugarPractica = $_POST["telefonoLugarPractica"];

$insertarDatos = "INSERT INTO antecedentesempresa VALUES('$nombreEmpresa',
                                                                        '$rutEmpresa',
                                                                        '$giroEmpresa',
                                                                        '$direccionEmpresa',
                                                                        '$comunaEmpresa',
                                                                        '$paso1',
                                                                        '$fonoEmpresa',
                                                                        '$nombreSupervisor',
                                                                        '$apellidoSupervisor',
                                                                        '$cargoSupervisor',
                                                                        '$correoSupervisor',
                                                                        '$telefonoSupervisor',
                                                                        '$direccionDePractica',
                                                                        '$paso2',
                                                                        '$telefonoLugarPractica')";
$ejecutarInserztar = mysqli_query($enlace, $insertarDatos);

?>


<script>
    window.location.href = "http://localhost/ProyectoTitulo/formularioPractica4.php";
</script>

</body>
</html>