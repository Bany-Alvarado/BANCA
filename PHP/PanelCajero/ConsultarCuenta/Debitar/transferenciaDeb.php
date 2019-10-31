<?php
session_start();
?>

<?php

include '../../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$monto = $_POST['monto'];
$cta = $_GET['cta'];

$query = "CALL TRANSFERCTADEBITO($monto,'$cta')";

if ($conexion->query($query)) {
    mysqli_close($conexion);
    echo "<script>location.href='../../Panel.php';</script>";
}
else {
    echo "Error SP ";
}
 mysqli_close($conexion); 
 ?>