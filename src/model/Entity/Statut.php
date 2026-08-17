<?php

class Statut
{
    private ?int $id;
    private string $nomStatut;

    public function __construct( ?int $id, string $nomStatut) {
        
        $this->id = $id;
        $this->nomStatut = $nomStatut;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomStatut(): string
    {
        return $this->nomStatut;
    }

    public function setNomStatut(string $nomStatut): void
    {
        $this->nomStatut = $nomStatut;
    }
}