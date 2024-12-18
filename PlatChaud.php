<?php

class PlatChaud extends Recette
{
    private string $typeCuisine;

    public function __construct(string $nom, string $description, string $typeCuisine)
    {
        parent::__construct($nom, $description);
        $this->typeCuisine = $typeCuisine;
    }

    public function afficher(): string
    {
        return parent::afficher() . "Type de cuisine : {$this->typeCuisine}<br>";
    }
}
?>
