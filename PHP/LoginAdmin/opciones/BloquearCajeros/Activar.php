
<?php
session_start();
?>

<?php

include '../../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$id = $_GET['id'];
$status = $_GET['status'] == 0 ? 1 : 0;
// sql to delete a record
$sql = "UPDATE usuarios_cajeros set BLOQUEADO = $status WHERE ID = '$id'";
echo $sql; 

if (mysqli_query($conexion, $sql)) {
    mysqli_close($conexion);
    header('Location: cajeros.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error UPDATE record";
}
 //echo $output;
 mysqli_close($conexion); 
 ?>