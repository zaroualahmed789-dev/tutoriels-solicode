
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog Personnel</title>
    <link rel="stylesheet" href="dossier-depart/css/style.css">
</head>
<body>

<header>
    <h1>Mon Blog Personnel</h1>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="#">Catégories</a>
        <a href="#">À propos</a>
    </nav>
</header>

<main>
    <section class="hero">
        <h2>Bienvenue sur mon blog</h2>
        <p>Découvrez mes articles sur le développement et le design.</p>
    </section>

    <section class="articles">
        <h2>Derniers articles</h2>

        <div class="grille-articles">

            <?php foreach ($articles as $article): ?>

                <article class="carte-article">

                    <div class="carte-image">
                        <img
                            src="images/<?= htmlspecialchars($article['image']) ?>"
                            alt="<?= htmlspecialchars($article['titre']) ?>"
                        >
                    </div>

                    <div class="contenu-article">

                        <span class="categorie">
                            <?= htmlspecialchars($article['categorie_libelle']) ?>
                        </span>

                        <h3>
                            <?= htmlspecialchars($article['titre']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($article['contenu']) ?>
                        </p>

                        <time datetime="<?= htmlspecialchars($article['date_creation']) ?>">
                            <?= htmlspecialchars($article['date_creation']) ?>
                        </time>

                        <a href="#">
                            Lire la suite
                        </a>

                    </div>
                </article>

            <?php endforeach; ?>

        </div>
    </section>
</main>

<footer>
    <p>&copy; 2026 Mon Blog Personnel</p>
</footer>

</body>
</html>
