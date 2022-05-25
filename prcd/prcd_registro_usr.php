<html>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    </header>

<?php
// header("Location: ../tabla.php");


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$rfc = $_POST['rfc'];
$curp = $_POST['curp'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$fecharegistro =  $_POST['fechahora'];
// $codigo_conferencia = $_POST['codigo'];


function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
    
    }   
    
$codigo = generarCodigo(9); // genera un código de 9 caracteres de longitud.
$codigo_confirmacion = 'INJ-'. $codigo;

include('conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'email/Exception.php';
require 'email/PHPMailer.php';
require 'email/SMTP.php';

$sql2="INSERT INTO usr_conferencia(nombre,apellido,rfc,curp,edad,email,codigo,fecha,conferencia) 
    VALUES('$nombre','$apellidos','$rfc','$curp','$edad','$email','$codigo_confirmacion','$fecharegistro','$id')";
    $resultado2= $conn->query($sql2) or die ('Error en el query database' .mysqli_error($conn));

    echo "<script type=\"text/javascript\">Swal.fire(
        'Registrado',
        'Te has registrado correctamente',
        'success'
      ).then(function(){window.location='../conferencias.php';});</script>";

$merge = "SELECT usr_conferencia.nombre, usr_conferencia.apellido, usr_conferencia.codigo, conferencia.conferencia, conferencia.fecha, conferencia.direccion_sala FROM usr_conferencia INNER JOIN conferencia ON usr_conferencia.conferencia = conferencia.id_conf WHERE usr_conferencia.codigo = '$codigo_confirmacion'";
$resultado3= $conn->query($merge) or die ('Error en el query database' .mysqli_error($conn));
$row=$resultado3->fetch_assoc();      
    
    $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = 0;                                       // Enable verbose debug output debugging: 1 = errores y mensajes, 2 = sólo mensajes
          $mail->isSMTP();                                            // Set mailer to use SMTP
          $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'tecnologias.injuventud@gmail.com';                     // SMTP username
          $mail->Password   = 'uaiX98w3g2Hyi7X';                               // SMTP password
          $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to 465 o 587 gmail.
          $mail->IsHTML(true);
      
          //Recipients
          $mail->setFrom('tecnologias.injuventud@gmail.com', 'Tecnologías INJUVENTUD');
          $mail->addAddress($email, $nombre);     // Add a recipient
          // $mail->addAddress('ellen@example.com');               // Name is optional
          // $mail->addReplyTo('info@example.com', 'Information');
        //   $mail->addCC('tecnologias.injuventud@gmail.com');
          // $mail->addBCC('bcc@example.com');
      
          // Attachments
          // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      
          // Content
          $mail->isHTML(true);
          $mail->CharSet = 'UTF-8';                                  // Set email format to HTML
          $mail->Subject = 'Registro conferencia INJUVENTUD';
          $mail->Body    = '<p><b>Estimado '.$row['nombre'].' '.$row['apellido'].':<b></p>
          <p>Te has registrado a la conferencia <b>'.$row['conferencia'].'</b> programada para la fecha <b>'.$row['fecha'].'</b></p>
          <p>La sala de conferencia será en el siguiente enlace: <a href="'.$row['direccion_sala'].'" target="_blank">'.$row['direccion_sala'].'</a>.</p>
          <p>Atentamente</p>
          <p><b>INSTITUTO DE LA JUVENTUD DEL ESTADO DE ZACATECAS</b></p>
          ';
          $mail->AltBody = 'Registrado conferencias INJUVENTUD';
      
          $mail->send();
          // echo 'Message has been sent';
      
          // echo "<script type=\"text/javascript\">Swal.fire(
          //     'Usuario ya registrado',
          //     'Se envió a tu correo electrónico tu usuario y contraseña',
          //     'warning'
          //   ).then(function(){window.location='../index.html';});</script>";
      
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }


?>
<a href="">
</html>