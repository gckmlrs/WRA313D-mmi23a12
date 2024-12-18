<?php

class Ingredient
{
    private string $nom;
    private float $quantite;
    private string $typeQuantite;

    public function __construct(string $nom, float $quantite, string $typeQuantite)
    {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->typeQuantite = $typeQuantite;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setQuantite(float $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function __toString(): string
    {
        return "{$this->quantite} {$this->typeQuantite} de {$this->nom}";
    }
}
?>
