<?php 
$title = "Contact - xPirience"; 
include 'header.php'; 
?>

<!-- En-tête spécifique -->
<header class="hero-small">
    <h1>Contactez-nous</h1>
</header>

<!-- Section Localisation -->
<section class="presentation centered-content">
    <h2>Notre Localisation</h2>
    <p>Nous sommes situés au cœur de Genève, en Suisse. Passez nous voir ou contactez-nous pour plus d'informations.</p>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2762.136429307042!2d6.143158716125504!3d46.20439097911626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c650e6a2d6abf%3A0x4c5e0438d0b6db6b!2sGen%C3%A8ve%2C%20Suisse!5e0!3m2!1sfr!2sch!4v1681405661564!5m2!1sfr!2sch" 
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

<!-- Section Équipe -->
<section class="team centered-content">
    <h2>Notre Équipe</h2>
    <div class="team-cards">
        <div class="card">
            <h3>Christophe Soula</h3>
            <p>Chief Executive Officer</p>
        </div>
        <div class="card">
            <h3>Zao Soula</h3>
            <p>Chief Technical Officer</p>
        </div>
        <div class="card">
            <h3>Noelia Torreiro</h3>
            <p>Chief Operations Officer & Ressources Humaines</p>
        </div>
        <div class="card">
            <h3>Tristan Schwenk</h3>
            <p>Développeur Full-stack</p>
        </div>
        <div class="card">
            <h3>Grégoire Jouvenat</h3>
            <p>Ingénieur Réseau et Sécurité</p>
        </div>
    </div>
</section>

<!-- Section Formulaire -->
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

<?php include 'footer.php'; ?>
