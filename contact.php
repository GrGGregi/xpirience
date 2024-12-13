<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - KANZen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Menu de Navigation -->
<nav class="navbar">
    <div class="container">
        <a href="index.php" class="logo">KANZen</a>
        <ul class="nav-links">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="about.php">À propos</a></li>
            <li><a href="solution.php">Solution</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- En-tête -->
<header class="hero-small">
    <h1>Contactez-nous</h1>
</header>

<!-- Section Formulaire Centrée -->
<section class="contact-form centered-content">
    <h2>Envoyez-nous un message</h2>
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

<!-- Footer -->
<footer>
    <p>&copy; 2024 xPirience Sàrl - Tous droits réservés</p>
    <p>Maintenu avec ♡ par <a href="https://ezyostudio.com" target="_blank">EzyoStudio</a>.</p>
</footer>

</body>
</html>
