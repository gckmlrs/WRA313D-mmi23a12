<?php
abstract class Recette implements IngredientsInterface
{
    // Propriétés communes à toutes les recettes
    protected string $nom;
    protected string $description;
    protected array $ingredients = []; // Liste des ingrédients, stockant des objets Ingredient

    private static int $nbRecettes = 0;

    public function __construct(string $nom, string $description)
    {
        $this->nom = $nom;
        $this->description = $description;
        self::$nbRecettes++;
    }

    // Retourne le nombre total de recettes
    public static function getNbRecettes(): int
    {
        return self::$nbRecettes;
    }

    // Ajout d'un ingrédient sous forme d'objet Ingredient
    public function addIngredient(Ingredient $ingredient): void
    {
        $this->ingredients[$ingredient->getNom()] = $ingredient;
    }

    // Modification de la quantité d'un ingrédient existant
    public function modifierIngredient($nom, $quantite): void
    {
        if (isset($this->ingredients[$nom])) {
            $this->ingredients[$nom]->setQuantite($quantite);
        }
    }

    // Suppression d'un ingrédient par son nom
    public function supprimerIngredient($nom): void
    {
        unset($this->ingredients[$nom]);
    }

    // Affichage de la recette et de ses ingrédients
    public function afficher(): string
    {
        $details = "<strong>{$this->nom}</strong> : {$this->description}<br>";
        foreach ($this->ingredients as $ingredient) {
            $details .= "- $ingredient<br>";
        }
        return $details;
    }
}
?>
