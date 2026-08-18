<?php

class Classe
{
    private ?int $id;
    private ?string $nom_classe;

    public function __construct(
        ?int $id = null,
        ?string $nom_classe = null
    ) {
        $this->id = $id;
        $this->nom_classe = $nom_classe;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClasse(): ?string
    {
        return $this->nom_classe;
    }

    public function setNomClasse(?string $nom_classe): void
    {
        $this->nom_classe = $nom_classe;
    }
}