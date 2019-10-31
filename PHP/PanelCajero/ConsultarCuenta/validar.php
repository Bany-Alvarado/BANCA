
<?php
session_start();
?>

<?php

include '../../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$id = $_GET['tipo'];
$cta = $_POST['cta'];

$sql = "SELECT cta.ID AS IDCTA, USU.NOMBRE AS NOMBRECTA FROM cuenta cta
 JOIN usuarios USU
 ON cta.ID_USUARIO = USU.ID WHERE cta.NO_CUENTA = '$cta'";


$result = $conexion->query($sql);

 
  $row = $result->fetch_array(MYSQLI_ASSOC);

if (!empty($row)) { 
  if($id== "true"){
    echo "<script>location.href='Transferir/acreditar.php?cta=".$row['IDCTA']."&nombre=".$row['NOMBRECTA']."';</script>";
  }else{
    echo "<script>location.href='Debitar/debito.php?cta=".$row['IDCTA']."&nombre=".$row['NOMBRECTA']."';</script>";
  }
 } else { 

  echo "<script>location.href='IntentarDeNuevo.php?id=true';</script>";
 }

 //echo $output;
 mysqli_close($conexion); 

 ?>