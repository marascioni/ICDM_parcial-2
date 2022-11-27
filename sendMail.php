<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];
$subject = "Contacto desde la web"; 

$mailTo="miguel.rascioni@davinci.edu.ar";
$headers="De:" .$mailFrom;
$txt = "Recibiste un mail de: " .$name. " ".$apellido. ".\n\n Teléfono:" .$telefono. ".\n\n".$message;

mail($mailTo,$subject,$txt,$headers);
header("Location: mailSent.php");
}
?>