<?php

// ça nous permet de rechercher nos class php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// on viens y mettre ici la création des plats et on viens les afficher avec le echo

echo "<h2>1. Création des Plats chaud</h2>";
$platChaud = new PlatChaud('Lasagne', 'pâtes', 'Italienne');
echo $platChaud->afficher();

$platChaud2 = new PlatChaud('Tartiflette', 'pommes de terre', 'Savoyarde');
echo $platChaud2->afficher();

// on refait de même pour une pizza

echo "<h2>2. Création d'une Pizza</h2>";
$pizza = new Pizza('Hawaïenne', 'base tomate');
echo $pizza->afficher();

// on créé les ingredient 1 2 3
$ingredient1 = new Ingredient('Ananas', 10, 'rondelles');
$ingredient2 = new Ingredient('Jambon', 5, 'tranches');
$ingredient3 = new Ingredient('Mozzarella', 2, 'boules');

// on rajoute les ingrédients ici
$pizza->addIngredient($ingredient1);
$pizza->addIngredient($ingredient2);
$pizza->addIngredient($ingredient3);

echo $pizza->afficher();

echo "<h2>3. Modification d'une recette</h2>";
$pizza->modifierIngredient('Ananas', 15);
echo $pizza->afficher();

// on supprime l'ananas PARCEQUE METTRE DE L'ANANAS DANS UNE PIZZA QUI FAIT ÇA ?????

echo "<h2>4. Suppression d'un ingrédient</h2>";
$pizza->supprimerIngredient('Ananas');
echo $pizza->afficher();

// on affiche le nombre de plats crée au total

echo "<h2>5. Nombre de plats chaud</h2>";
echo Recette::getNbRecettes().' recettes ont été créées.';
?>
