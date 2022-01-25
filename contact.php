<?php include('header.php'); ?>
<main id="contenu" class="container">
    <!-- ------------------Formulaire Contact------------- -->
    <div class="contact">
        <h1>Laissez-nous un message</h1>
        <form name="formulaire" id = "formu">
            <!-- <p id="civi"> 
                <label for="civilite" class="petit">M.</label> 
                <input type="radio" id="civilite" name="civilite" class="civilite" value="M">
                <label for="civilitee">Mme</label>
                <input type="radio" id="civilitee" name="civilitee" class="civilite" value="Mme" checked>
                
            </p> -->
            <p>
                <label for="nom">Votre Nom</label>
                <input type="text" name="nom" id="nom" placeholder="tapez votre nom" required>
            </p>
            <p>
                <label for="prenom">Votre Prénom</label>
                <input type="text" name="prenom" id="prenom" placeholder="tapez votre prénom" required>
            </p>
            <p>
                <label for="adresse">Votre Adresse Postale</label>
                <input type="text" name="adresse" id="adresse" placeholder="tapez votre adresse postale" required>
                <ul id="liste-adresse"></ul>
            </p>
            <p>
                <label for="tel">Votre Téléphone</label>
                <input type="tel" name="tel" id="tel" placeholder="06 45 45 45 45" required>
            </p>
            <p>
                <label for="message">Votre Message</label></p>
            <p>
                <textarea name="message" rows="5" id="message" placeholder="votre message"></textarea>
            </p>
            <p><button type="submit" id="formu-boutton">Envoyer</button><button type="reset" id="formu-boutton">Annuler</button></p>
            
        </form>
    </div>
    
    <!-- ------------------Carte Google---------------- -->
    <iframe id="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1338.1766455331033!2d-3.926499541714321!3d47.87148679401601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4810dadf1c1c4cb5%3A0x1da8de8c7712f95!2s7%20Rue%20de%20la%20Lib%C3%A9ration%2C%2029900%20Concarneau!5e0!3m2!1sfr!2sfr!4v1637653921264!5m2!1sfr!2sfr" height="450"
        style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</main>
<?php include('footer.php'); ?>