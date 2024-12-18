<?php
/**
 * Created by PhpStorm.
 * User: davidannebicque
 * Date: 11/12/2017
 * Time: 16:27
 */

interface IngredientsInterface
{
    public function addIngredient($nom, $quantite, $typeQuantite);
    public function modifierIngredient($nom, $quantite); //Permet de modifier la quantité de l'ingrédient $nom
    public function supprimerIngredient($nom); //Permet de supprimer l'ingrédient $nom
}
