<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($nom) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $to = "contact@xpirience.io";  // Remplacez par votre adresse e-mail
            $subject = "Nouveau message de $nom";
            $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                echo "<script>alert('Message envoyé avec succès !'); window.location.href='contact.php';</script>";
            } else {
                echo "<script>alert('Une erreur est survenue lors de l\'envoi. Veuillez réessayer.'); window.location.href='contact.php';</script>";
            }
        } else {
            echo "<script>alert('Adresse e-mail invalide.'); window.location.href='contact.php';</script>";
        }
    } else {
        echo "<script>alert('Veuillez remplir tous les champs.'); window.location.href='contact.php';</script>";
    }
} else {
    echo "<script>alert('Accès non autorisé.'); window.location.href='contact.php';</script>";
}
?>
