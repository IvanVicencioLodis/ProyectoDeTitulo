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


$cargoADesempeñar = $_POST["cargoADesempeñar"];
$actividadesADesarrollar = $_POST["actividadesADesarrollar"];


$insertarDatos = "INSERT INTO actividadesadesarrollarenpractica VALUES('$cargoADesempeñar',
                                                                        '$actividadesADesarrollar')";
$ejecutarInserztar = mysqli_query($enlace, $insertarDatos);

?>


<script>
    window.location.href = "http://localhost/ProyectoTitulo/formularioPracticaGuardado.php";
</script>

</body>
</html>