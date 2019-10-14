
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
$alias = $_POST['alias'];
$montMax = $_POST['montMax'];
$transMens = $_POST['transMens'];
$cta = $_GET['cta'];
$user = $_SESSION["UUID"];
// sql to delete a record
$sql = "INSERT INTO cuentas_terceros (ID, ID_USUARIO, ID_TERCERO, MONT_MAXIMO, TRANS_MAXIMA_MES, ALIAS) VALUES ('$uuid', '$user','$cta','$montMax','$transMens','$alias')";
echo $sql; 

if (mysqli_query($conexion, $sql)) {
    mysqli_close($conexion);
    header('Location: ../Terceros.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error UPDATE record";
}
 //echo $output;
 mysqli_close($conexion); 
 ?>