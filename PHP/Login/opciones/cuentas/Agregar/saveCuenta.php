
<?php

include '../../../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$uuid = uniqid('', true);
$alias = $_POST['alias'];
$montMax = $_POST['montMax'];
$transMens = $_POST['transMens'];
$cta = $_GET['cta'];
$user = $_SESSION['UUID'];
$montoMaxVal = number_format($montMax,2);
$transMaxVal = number_format($transMens,2);
// sql to delete a record
$sql = "INSERT INTO cuentas_terceros (ID, ID_USUARIO, ID_TERCERO, MONT_MAXIMO, TRANS_MAXIMA_MES, ALIAS) VALUES ('$uuid', '$user','$cta',$montoMaxVal,$transMens,'$alias')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>location.href='../Terceros.php';</script>";
    mysqli_close($conexion);
} else {
    echo "Error UPDATE record";
}
 //echo $output;
 mysqli_close($conexion); 
 ?>