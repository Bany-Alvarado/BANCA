
<?php
session_start();
?>

<?php

include '../../../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$uuid = uniqid('', true);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$pass = $_POST['password'];
// sql to delete a record
$sql = "INSERT INTO usuarios_cajeros (ID, NOMBRE, APELLIDO, USUARIO, CORREO, PASSWORD, BLOQUEADO) VALUES ('$uuid','$nombre','$apellido','$usuario','$email','$pass',0)";
echo $sql; 

if (mysqli_query($conexion, $sql)) {
    mysqli_close($conexion);
    header('Location: ../cajeros.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error UPDATE record";
}
 //echo $output;
 mysqli_close($conexion); 
 ?>