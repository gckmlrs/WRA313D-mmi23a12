<?php

interface IngredientsInterface
{
    public function addIngredient(Ingredient $ingredient);
    public function modifierIngredient($nom, $quantite); // Modifier la quantité d'un ingrédient
    public function supprimerIngredient($nom); // Supprimer un ingrédient
}
?>
