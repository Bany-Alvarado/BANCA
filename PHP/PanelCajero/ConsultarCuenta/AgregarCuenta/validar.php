
<?php
session_start();
?>

<?php

include '../../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


$dpi = $_POST['dpi'];

$sql = "SELECT ID, NOMBRE  FROM USUARIOS WHERE DPI = '$dpi'";


$result = $conexion->query($sql);

 
  $row = $result->fetch_array(MYSQLI_ASSOC);

if (!empty($row)) { 
    echo "<script>location.href='Agregar.php?UID=".$row['ID']."&NOMBRE=".$row['NOMBRE']." ';</script>";
 } else { 

  echo "<script>location.href='IntentarDeNuevo.php';</script>";
 }

 //echo $output;
 mysqli_close($conexion); 

 ?>