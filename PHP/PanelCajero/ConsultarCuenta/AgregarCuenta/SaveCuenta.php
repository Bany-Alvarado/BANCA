<?php

include '../../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


$uuidC = uniqid('', true);

$cta = $_GET['cta'];
$tipo_cta = $_POST['tipo_cta'];
$cuenta = $_POST['cuenta'];
$saldo = $_POST['saldo'];
$formatValue = number_format($saldo,2);
// sql to delete a record

$sql = "INSERT INTO cuenta (ID, ID_USUARIO, NO_CUENTA, ID_TIPO_CUENTA, SALDO) VALUES ('$uuidC','$cta','$cuenta','$tipo_cta', $formatValue)";

if (mysqli_query($conexion, $sql)) {
    echo "<script>location.href='../../Panel.php';</script>";
    mysqli_close($conexion);
} else {
    echo "Error insert record";
}

 mysqli_close($conexion); 
 ?>