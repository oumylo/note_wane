<?php

class Etablissement
{
    private ?int $id;
    private ?string $nom_etablissement;
    private ?string $adresse;
    private ?string $telephone;

    public function __construct(
        ?int $id = null,
        ?string $nom_etablissement = null,
        ?string $adresse = null,
        ?string $telephone = null
    ) {
        $this->id = $id;
        $this->nom_etablissement = $nom_etablissement;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtablissement(): ?string
    {
        return $this->nom_etablissement;
    }

    public function setNomEtablissement(?string $nom_etablissement): void
    {
        $this->nom_etablissement = $nom_etablissement;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): void
    {
        $this->adresse = $adresse;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }
}