
<?php
session_start();
?>

<?php

include '../../../../../config.php';
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$cuenta = $_POST['noCuenta'];
 
$sql = "SELECT * FROM cuenta WHERE NO_CUENTA = '$cuenta'";


$result = $conexion->query($sql);

// $row = $result->fetch_array(MYSQLI_ASSOC);
if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);

    header("Location: PanelNuevo.php?cta=".$row['ID']."&nocta=".$row['NO_CUENTA']);
  }else {
    header('Location: errorCta.php');    
  }

 //echo $output;
 mysqli_close($conexion); 
 ?>