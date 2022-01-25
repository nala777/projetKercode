<?php 
include('header.php'); 

?>

<main class="container" id="accueil">
    <!-- ----------------Bannière Index------------- -->
    <img id="image" src="images-judo/prof.jpg" alt="Professeur ">
    <!-- --------------------texte bienvenue--------- -->
    <div id="bienvenue">
        <h1>Bienvenue</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut officia quasi optio reiciendis 
        necessitatibus minus minima quibusdam dolorum labore dignissimos eos, reprehenderit similique 
        maxime. Quod sed expedita eaque, animi corrupti fuga placeat delectus fugiat ullam possimus 
        reprehenderit beatae saepe atque.</p>
    </div>
    <!-- -----------------Entête dernière actualités----- -->
    <section id="section-accueil">
        <div id="entete-actu">
            <h2>Actualités à la une</h2>
            <a href="actu.php">Toute l'Actualité <i class="fas fa-arrow-right"></i></a>
            
            
        </div>
        <!-- --------------------Dernières actualités---------------- -->
        <article class="articles">
            <img class="image-article" src="images-judo/article1.jpg" alt="Combat de Judo">
            <div class="para">
                <h3>Titre article 1</h3>
                <p class="texte-article">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </article>
        
        <article class="articles">
            <img class="image-article" src="images-judo/article2.jpg" alt="Jeune Fille Judo">
        <div class="para">
                <h3>Titre article 2</h3>
                <p class="texte-article">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </article>

        <article class="articles">
            <img class="image-article" src="images-judo/article3.jpg" alt="Combat Judo">
            <div class="para">
                <h3>Titre article 3</h3>
                <p class="texte-article">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </article>
        <!-- -------------------Voir plus---------------- -->
    <div id="voir-plus">
        <a id="bouton-voir" href="#actu.php">En voir +</a>
    </div>
    </section>
    
</main>

<?php include('footer.php'); ?>