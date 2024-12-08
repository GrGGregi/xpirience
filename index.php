<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background-image"></div>
    <div class="form-container">
        <h1>Contactez-nous</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = htmlspecialchars($_POST["nom"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);

            if (!empty($nom) && !empty($email) && !empty($message)) {
                echo "<p class='success'>Merci, $nom ! Votre message a été envoyé.</p>";
            } else {
                echo "<p class='error'>Veuillez remplir tous les champs.</p>";
            }
        }
        ?>
        <form action="" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
            
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>
            
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Votre message" required></textarea>
            
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
