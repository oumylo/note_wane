<?php

class Classe
{
    private ?int $id;
    private string $nomClasse;
    private ?string $niveau;

    public function __construct( ?int $id, string $nomClasse, ?string $niveau = null) {
        
        $this->id = $id;
        $this->nomClasse = $nomClasse;
        $this->niveau = $niveau;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClasse(): string
    {
        return $this->nomClasse;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNomClasse(string $nomClasse): void
    {
        $this->nomClasse = $nomClasse;
    }

    public function setNiveau(?string $niveau): void
    {
        $this->niveau = $niveau;
    }
}