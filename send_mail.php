<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nom = htmlspecialchars(trim($_POST['nom']));
//     $email = htmlspecialchars(trim($_POST['email']));
//     $message = htmlspecialchars(trim($_POST['message']));

//     if (!empty($nom) && !empty($email) && !empty($message)) {
//         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $to = "contact@xpirience.io";  // Remplacez par votre adresse e-mail
//             $subject = "Nouveau message de $nom";
//             $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";
//             $headers = "From: $email";

//             if (mail($to, $subject, $body, $headers)) {
//                 echo "<script>alert('Message envoyé avec succès !'); window.location.href='contact.php';</script>";
//             } else {
//                 echo "<script>alert('Une erreur est survenue lors de l\'envoi. Veuillez réessayer.'); window.location.href='contact.php';</script>";
//             }
//         } else {
//             echo "<script>alert('Adresse e-mail invalide.'); window.location.href='contact.php';</script>";
//         }
//     } else {
//         echo "<script>alert('Veuillez remplir tous les champs.'); window.location.href='contact.php';</script>";
//     }
// } else {
//     echo "<script>alert('Accès non autorisé.'); window.location.href='contact.php';</script>";
// }

$mail = new PHPMailer();

// Settings
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "mail.infomaniak.ch";  // SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "no-reply@xpirience.io";            // SMTP account username example
$mail->Password   = "knBfdHYarHYt277AhCFk";            // SMTP account password example

// Content
$mail->setFrom('no-reply@xpirience.io');   
$mail->addAddress('receipt@domain.com');

$mail->isHTML(true);                       // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

?>
<!-- 
SMTP_HOST=mail.infomaniak.ch
SMTP_PORT=465
SMTP_USERNAME=no-reply@xpirience.io
SMTP_PASSWORD=knBfdHYarHYt277AhCFk
SMTP_FROM=no-reply@xpirience.io
SMTP_REPLY_TO=contact@xpirience.io -->
