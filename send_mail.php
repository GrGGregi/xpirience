<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Initialiser PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuration SMTP
    $mail->isSMTP();
    $mail->CharSet    = 'UTF-8';
    $mail->Host       = "mail.infomaniak.com";  
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->Port       = 465;                   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Username   = "no-reply@xpirience.io"; 
    $mail->Password   = "knBfdHYarHYt277AhCFk"; 

    // Configuration de l'email
    $nom = "Jean Dupont";  // Exemple de valeur
    $emaily = "jean@example.com"; 
    $message = "Ceci est un message de test.";

    $mail->setFrom('no-reply@xpirience.io', 'Xpirience');   
    $mail->addAddress('receipt@domain.com');

    $mail->isHTML(true);                       
    $mail->Subject = "Nouveau message depuis le site web de Xpirience de $nom";
    $mail->Body    = "Nom: $nom<br>Email: $emaily<br>Message:<br>$message <b>in bold!</b>";
    $mail->AltBody = "Nom: $nom\nEmail: $emaily\nMessage:\n$message";

    $mail->send();
    echo "Message envoyé avec succès !";

} catch (Exception $e) {
    echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
}
?>
