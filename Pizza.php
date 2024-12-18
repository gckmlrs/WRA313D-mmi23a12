<?php

class Pizza extends Recette
{
    private string $base;

    public function __construct(string $nom, string $base)
    {
        parent::__construct($nom, "Pizza avec une base de $base");
        $this->base = $base;
    }

    public function afficher(): string
    {
        return parent::afficher() . "Base : {$this->base}<br>";
    }
}
?>
