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



    $queCarrera = $_POST["queCarrera"];
    $tipAutoPractica = $_POST["tipAutoPractica"];
    $semCursadoCompl = $_POST["semCursadoCompl"];
    $semAsigAprobadas = $_POST["semAsigAprobadas"];
    $tipoPractica = $_POST["tipoPractica"];
  
    $insertarDatos = "INSERT INTO antecedentesacademicosestudiante VALUES('$queCarrera',
                                                                            '$tipAutoPractica',
                                                                            '$semCursadoCompl',
                                                                            '$semAsigAprobadas',
                                                                            '$tipoPractica')";
    $ejecutarInserztar = mysqli_query($enlace, $insertarDatos);

?>


<script>
    window.location.href = "http://localhost/ProyectoTitulo/formularioPractica3.php";
</script>

</body>
</html>