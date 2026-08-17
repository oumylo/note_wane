<?php

class Eleve
{
    private ?int $id;
    private string $matriculeEleve;
    private string $nomEleve;
    private string $prenomEleve;
    private ?string $dateNaissance;
    private ?int $responsableId;

    public function __construct( ?int $id, string $matriculeEleve, string $nomEleve, string $prenomEleve, ?string $dateNaissance = null,?int $responsableId = null) {
       
        $this->id = $id;
        $this->matriculeEleve = $matriculeEleve;
        $this->nomEleve = $nomEleve;
        $this->prenomEleve = $prenomEleve;
        $this->dateNaissance = $dateNaissance;
        $this->responsableId = $responsableId;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeEleve(): string
    {
        return $this->matriculeEleve;
    }

    public function getNomEleve(): string
    {
        return $this->nomEleve;
    }

    public function getPrenomEleve(): string
    {
        return $this->prenomEleve;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function getResponsableId(): ?int
    {
        return $this->responsableId;
    }

    public function setMatriculeEleve(string $matriculeEleve): void
    {
        $this->matriculeEleve = $matriculeEleve;
    }

    public function setNomEleve(string $nomEleve): void
    {
        $this->nomEleve = $nomEleve;
    }

    public function setPrenomEleve(string $prenomEleve): void
    {
        $this->prenomEleve = $prenomEleve;
    }

    public function setDateNaissance(?string $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function setResponsableId(?int $responsableId): void
    {
        $this->responsableId = $responsableId;
    }
}