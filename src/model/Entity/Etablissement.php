<?php

class Etablissement
{
    private ?int $id;
    private string $nomEtablissement;
    private ?string $adresse;
    private ?string $telephone;

    public function __construct( ?int $id, string $nomEtablissement, ?string $adresse = null, ?string $telephone = null ) {
        
        $this->id = $id;
        $this->nomEtablissement = $nomEtablissement;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtablissement(): string
    {
        return $this->nomEtablissement;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setNomEtablissement(string $nomEtablissement): void
    {
        $this->nomEtablissement = $nomEtablissement;
    }

    public function setAdresse(?string $adresse): void
    {
        $this->adresse = $adresse;
    }

    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }
}