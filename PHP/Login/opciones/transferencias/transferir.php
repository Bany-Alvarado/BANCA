


<?php
session_start();
?>

<?php

include '../../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$id = $_GET['cta'];
$monto = (double)filter_var($_POST['monto'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$cta = $_POST['cta'];
$comment = $_POST['comment'];



$query = "CALL transferir($monto,'$cta','$id','$comment')";

if ($conexion->query($query)) {
    echo "CALL failed: (" . $conexion->errno . ") " . $conexion->error;
    mysqli_close($conexion);
    echo "<script>location.href='../panelOpciones.php';</script>";
}
else {
    echo "Error SP ";
}
 mysqli_close($conexion); 
 ?>