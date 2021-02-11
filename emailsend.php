<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$nombre = $_POST['name'];
$email = $_POST['email'];
$razon= $_POST['subject'];
$cuerpo= $_POST['message'];

echo $nombre;
echo $email;
echo $razon;
echo $cuerpo;


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'demunas.pruebas@gmail.com';                     // SMTP username
    $mail->Password   = 'Demuna_prueba';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('demunas.pruebas@gmail.com');
    $mail->addAddress('sisterno1998@gmail.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                 // Set email format to HTML
    $mail->Subject = 'Envio de pagina web';
    $mail->Body    = "Nombre : ".$nombre." <br> Email : ".$email." <br> Razon : ".$razon." <br> Opinion : ".$cuerpo." <br>";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
