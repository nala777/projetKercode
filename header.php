<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <header>
        <!-- ---------------------Header---------------------------- -->
        <div id="bandeau-haut" class="container">
            <nav>
                <!-- --------------Menu Buger-------------- -->
                <div class="menu-burger">
                    <input id="menu-toggle" type="checkbox" />
                    <label class="menu-btn" for="menu-toggle">
                        <span></span>
                    </label>

                    <ul class="menu-deroulant">
                        <li><a class="list" href="index.php">Accueil</a></li>
                        <li><a class="list" href="actu.php">Actualités</a></li>
                        <li><a class="list" href="orga.php">Organigramme</a></li>
                        <li><a class="list" href="contact.php">Contact</a></li>
                        <li class="list connexion">
                            <p>Se Connecter</p>
                            <ul>
                                <form action="envoyerform.php" method="post">
                                    <li class="identifiant">

                                        <input type="email" name="email" required="required"
                                            placeholder="Adresse Email">
                                    </li>
                                    <li class="identifiant">
                                        <input type="password" name="password" required="required"
                                            placeholder="Mot de Passe">
                                    </li>
                                    <li class="btn-id">
                                        <button type="button">Se Connecter</button>
                                    </li>
                                </form>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- -------------------Menu Grand Ecran---------------------- -->
                <ul id="menu-ordi">
                    <div id="menu-grand" >              
                        <li><a class="list menu-grand-list active" href="index.php">Accueil</a></li>
                        <li><a class="list menu-grand-list" href="actu.php">Actualités</a></li>
                        <li><a class="list menu-grand-list" href="orga.php">Organigramme</a></li>
                        <li><a class="list menu-grand-list" href="contact.php">Contact</a></li>
                    </div> 
                    <li class="list connexion">
                        <p>Se Connecter</p>
                        <ul>
                            <form action="envoyerform.php" method="post">
                                <li class="identifiant">

                                    <input type="email" name="email" required="required" placeholder="Adresse Email">
                                </li>
                                <li class="identifiant">
                                    <input type="password" name="password" required="required"
                                        placeholder="Mot de Passe">
                                </li>
                                <li class="btn-id">
                                    <button type="button">Se Connecter</button>
                                </li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </nav>
            <img id="logo" src="images-judo/logo.png" alt="logo">
        </div>
    </header>