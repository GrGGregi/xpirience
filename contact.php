<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - KANZen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="hero-small">
    <h1>Contactez-nous</h1>
</header>

<section class="contact-form">
    <h2>Remplissez le formulaire</h2>
    <form action="send_mail.php" method="POST">
        <label>Nom</label>
        <input type="text" name="nom" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Message</label>
        <textarea name="message" rows="5" required></textarea>

        <button type="submit" class="cta-btn">Envoyer</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 xPirience Sàrl - Tous droits réservés</p>
</footer>

</body>
</html>
