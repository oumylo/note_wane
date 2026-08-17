<?php

class AnneeScolaire
{
    private ?int $id;
    private string $libelle;
    private string $dateDebut;
    private string $dateFin;

    public function __construct( ?int $id, string $libelle, string $dateDebut, string $dateFin) {
        
        $this->id = $id;
        $this->libelle = $libelle;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function getDateDebut(): string
    {
        return $this->dateDebut;
    }

    public function getDateFin(): string
    {
        return $this->dateFin;
    }

    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    public function setDateDebut(string $dateDebut): void
    {
        $this->dateDebut = $dateDebut;
    }

    public function setDateFin(string $dateFin): void
    {
        $this->dateFin = $dateFin;
    }
}