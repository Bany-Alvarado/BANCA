<?php
session_start();
?>

<?php

include '../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM usuarios_cajeros WHERE usuario = '$username' and BLOQUEADO = 0";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);

if ($password==$row['PASSWORD']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
   echo "<script>location.href='Panel.php';</script>";
 } else { 
  echo "<script>location.href='ErrorLogin.php';</script>";
 }

 //echo $output;
 mysqli_close($conexion); 
 ?>