
<?php

$articles = [
    [
        'id' => 1,
        'titre' => 'Comment structurer ses composants UI avec Atomic Design ?',
        'contenu' => 'Découvrez les concepts fondamentaux de la méthode Atomic Design et comment organiser efficacement vos composants UI.',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-14',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu'
    ],
    [
        'id' => 2,
        'titre' => 'Maîtriser les micro-interactions UX',
        'contenu' => 'Une interface belle n\'est pas suffisante. Les micro-interactions améliorent l\'expérience utilisateur.',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-10',
        'categorie_libelle' => 'Design UI/UX',
        'categorie_couleur' => 'rose'
    ]
];

$categories = [
    ['id' => 1, 
    'libelle' => 'Développement'
    ],

    ['id' => 2,
     'libelle' => 'Design UI/UX'
     ]
      
];

require 'index-template.php';

?>
