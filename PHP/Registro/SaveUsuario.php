<?php

include '../../config.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


// function send_email(){
//     $to = "banyalvarado98@hotmail.com"; // this is your Email address
//     $from ="banyisalvarado@gmail.com"; // this is the sender's Email address
//     $first_name = 'test';
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $first_name . "wrote the following:" . "\n\n";
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n";

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$message,$headers);
//      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     }

$uuid = uniqid('', true);
$uuidC = uniqid('', true);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dpi = $_POST['dpi'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$pass = $_POST['password'];
$tipo_cta = $_POST['tipo_cta'];
$cuenta = $_POST['cuenta'];
// sql to delete a record
$sqlUsser = "INSERT INTO usuarios (ID, NOMBRE, APELLIDO, DPI, USUARIO, CORREO, PASSWORD, ACTIVO, esAdmin) VALUES ('$uuid','$nombre','$apellido','$dpi','$usuario','$email','$pass',1,1)";
$sql = "INSERT INTO cuenta (ID, ID_USUARIO, NO_CUENTA, ID_TIPO_CUENTA, SALDO) VALUES ('$uuidC','$uuid','$cuenta','$tipo_cta',0)";
echo $sql; 
// send_email();
if (mysqli_query($conexion, $sqlUsser)) {
    if (mysqli_query($conexion, $sql)) {
        mysqli_close($conexion);

        


        header('Location: ../../index.php');
        exit;
    } else {
        echo "Error insert record";
    }
} else {
    echo "Error insert record";
}

 mysqli_close($conexion); 
 ?>