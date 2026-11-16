
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon Blog Personnel - Accueil</title>

    <link rel="stylesheet" href="dossier-depart/css/style.css">
    <link rel="stylesheet" href="css/pages.css">
</head>

<body>

    <!-- MENU -->
    <header class="en-tete-site">

        <nav class="barre-navigation">

            <a href="index.php" class="logo">
                <span class="logo-sombre">Mon</span>
                <span class="logo-couleur">Blog.</span>
            </a>

            <ul class="liens-navigation">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="public-categorie.html">Catégories</a></li>
                <li><a href="public-apropos.html">À propos</a></li>
            </ul>

            <a href="admin-login.html" class="bouton-principal">
                Espace Admin
            </a>

        </nav>

    </header>


    <!-- BANNIERE -->
    <section class="banniere-accueil">

        <h1>
            Mon Blog Personnel :<br>
            <span>Développer &amp; Partager</span>
        </h1>

        <p>
            Découvrez mes derniers articles sur le développement web,
            l'architecture logicielle et les bonnes pratiques
            d'intégration UI/UX.
        </p>

        <div class="actions-banniere">

            <a href="#articles" class="bouton-principal">
                Lire les articles
            </a>

            <a href="public-apropos.html" class="bouton-secondaire">
                À propos de moi
            </a>

        </div>

    </section>


    <!-- ARTICLES -->
    <section id="articles" class="section-articles">

        <div class="conteneur-articles">


            <!-- FILTRES CATEGORIES -->
            <section class="filtre-categories">

                <h2>Explorer par thème</h2>

                <div class="liste-filtres">

                    <a href="index.php" class="pilule-filtre actif">
                        Tous les articles
                    </a>

                    <a href="public-categorie.html" class="pilule-filtre">
                        Développement
                    </a>

                    <a href="public-categorie.html" class="pilule-filtre">
                        Design UI/UX
                    </a>

                    <a href="public-categorie.html" class="pilule-filtre">
                        Productivité
                    </a>

                    <a href="public-categorie.html" class="pilule-filtre">
                        Management
                    </a>

                </div>

            </section>


            <!-- EN-TETE ARTICLES -->
            <div class="entete-liste-articles">

                <div>

                    <h2>Dernières publications</h2>

                    <p>
                        Les articles les plus récents de la communauté.
                    </p>

                </div>

                <a href="public-categorie.html" class="lien-voir-tout">
                    Explorer tout
                </a>

            </div>


            <!-- GRILLE ARTICLES -->
            <div class="grille-articles">

                <?php if (!empty($articles)): ?>

                    <?php foreach ($articles as $article): ?>

                        <div class="carte-article">


                            <!-- IMAGE -->
                            <a
                                href="article.php?id=<?= (int) $article['id'] ?>"
                                class="carte-image"
                            >

                                <img
                                    src="dossier-depart/images/<?= htmlspecialchars($article['image']) ?>"
                                    alt="<?= htmlspecialchars($article['titre']) ?>"
                                >

                            </a>


                            <!-- CATEGORIE AVEC IF ELSE -->

                            <?php if ($article['categorie_couleur'] == 'rose-fonce'): ?>

                                <span class="etiquette-categorie rose-fonce">
                                    <?= htmlspecialchars($article['categorie_libelle']) ?>
                                </span>

                            <?php elseif ($article['categorie_couleur'] == 'rose-clair'): ?>

                                <span class="etiquette-categorie rose-clair">
                                    <?= htmlspecialchars($article['categorie_libelle']) ?>
                                </span>

                            <?php else: ?>

                                <span class="etiquette-categorie autre">
                                    <?= htmlspecialchars($article['categorie_libelle']) ?>
                                </span>

                            <?php endif; ?>


                            <!-- CONTENU -->
                            <div class="carte-contenu">


                                <!-- ARTICLE A LA UNE -->

                                <?php if ($article['id'] == 1): ?>

                                    <small class="badge-special">
                                        ⭐ À la une
                                    </small>

                                <?php else: ?>

                                    <small>
                                        Article récent
                                    </small>

                                <?php endif; ?>


                                <!-- TITRE -->
                                <h3>

                                    <a href="article.php?id=<?= (int) $article['id'] ?>">

                                        <?= htmlspecialchars($article['titre']) ?>

                                    </a>

                                </h3>


                                <!-- DESCRIPTION -->
                                <p>

                                    <?= htmlspecialchars(substr($article['contenu'], 0, 100)) ?>...

                                </p>


                                <!-- DATE ET DUREE -->
                                <div class="carte-meta">

                                    <span>

                                        <?= date(
                                            'd/m/Y',
                                            strtotime($article['date_creation'])
                                        ) ?>

                                    </span>

                                    <span>
                                        5 min de lecture
                                    </span>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div class="aucun-article">

                        <h3>Aucun article disponible</h3>

                        <p>
                            Revenez bientôt pour découvrir nos nouvelles publications.
                        </p>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="pied-de-page">

        <div class="conteneur-pied-de-page">


            <div class="colonne-pied-de-page">

                <h2>Mon Blog</h2>

                <p>
                    Partager des connaissances, des tutoriels et des découvertes
                    sur le développement web.
                </p>

            </div>


            <div class="colonne-pied-de-page">

                <h2>Navigation</h2>

                <ul>

                    <li><a href="index.php">Accueil</a></li>

                    <li><a href="public-categorie.html">Catégories</a></li>

                    <li><a href="public-apropos.html">À propos</a></li>

                </ul>

            </div>


            <div class="colonne-pied-de-page">

                <h2>Contact</h2>

                <p>
                    Retrouvez les nouveaux articles chaque semaine.
                </p>

            </div>


        </div>


        <div class="bas-pied-de-page">

            <p>
                &copy; 2026 Mon Blog Personnel.
            </p>

        </div>

    </footer>

</body>
</html>
