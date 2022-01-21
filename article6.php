<?php include('header.php'); ?>

<main class="post container">
    <!-- --------------Page Article 6-------------- -->
    <article>
        <img src="images-judo/article6.jpg" alt="Prise de Judo">
        <div class="container-post">
            <a href="actu.php"><i class="fas fa-long-arrow-alt-left"></i> Retour</a>
            <div class="date">23 Novembre 2021</div>
            <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, harum.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempora
                amet facilis omnis et, sunt doloribus aut recusandae similique maxime id
                reiciendis beatae voluptatum, excepturi quis nisi? Corporis dolore, illo, sint blanditiis
                perferendis labore nesciunt nobis enim earum id eos, amet nemo fugit! Delectus, quaerat?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis facere
                nam perspiciatis est minus explicabo eaque, voluptatum quasi ipsum! Accusantium dicta
                consequuntur totam maxime nostrum, amet impedit non molestiae culpa voluptate
                dignissimos expedita qui ut tenetur soluta! Minus eius excepturi officiis, ut nam
                impedit asperiores.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis facere
                nam perspiciatis est minus explicabo eaque, voluptatum quasi ipsum! Accusantium dicta
                consequuntur totam maxime nostrum, amet impedit non molestiae culpa voluptate
                dignissimos expedita qui ut tenetur soluta! Minus eius excepturi officiis, ut nam
                impedit asperiores.</p>
        </div>
        <!-- --------------Commentaire------------- -->
        <div class="contact" id="commentaire">
            <h2>Commenter l'article</h1>
                <form action="commentaire.php" method="post">
                    <p><label for="message">Votre Message</label></p>
                    <p><textarea name="message" rows="5" id="message" placeholder="votre message"></textarea></p>
                    <p><input type="submit" value="Envoyer"><input type="reset" value="Annuler"></p>
                </form>
        </div>
    </article>
</main>
<?php include('footer.php'); ?>