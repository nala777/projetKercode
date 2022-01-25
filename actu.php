<?php include('header.php');
require_once('class/Articles.php');
require_once('class/actualite.php') ?>

<main id="actualites" class="container">
    <!-- -----------------------Actualités-------------------- -->
    <section id="actu" class="container">
        <h1>Actualités</h1>
        <h2>Judo Club</h2>
        <!-- ---------------Article-------------------- -->
        <?php foreach($articles->articles as $article) { ?>
            
            <article class="article ">
                <div class="over depassement">
                    <img src="images-judo/article<?= $article->id()?>.jpg" alt="Combat de Judo">
                </div>
                <div class="date">
                    <p><?= $article->date?></p>
                </div>
                <h3><?= $article->accroche?></h3>
                <a href="./article1.php?id=<?= array_search($article,$articles->articles)?>">En savoir plus <i class="fas fa-long-arrow-alt-right"></i></a>
            </article>
        <?php } ?>

    </section>
</main>

<?php include('footer.php'); ?>