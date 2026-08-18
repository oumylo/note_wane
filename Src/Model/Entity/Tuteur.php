<?php

class Tuteur
{
    private ?int $id;
    private ?string $nom_tuteur;
    private ?string $prenom_tuteur;
    private ?string $telephone;
    private ?string $email;

    public function __construct(
        ?int $id = null,
        ?string $nom_tuteur = null,
        ?string $prenom_tuteur = null,
        ?string $telephone = null,
        ?string $email = null
    ) {
        $this->id = $id;
        $this->nom_tuteur = $nom_tuteur;
        $this->prenom_tuteur = $prenom_tuteur;
        $this->telephone = $telephone;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTuteur(): ?string
    {
        return $this->nom_tuteur;
    }

    public function setNomTuteur(?string $nom_tuteur): void
    {
        $this->nom_tuteur = $nom_tuteur;
    }

    public function getPrenomTuteur(): ?string
    {
        return $this->prenom_tuteur;
    }

    public function setPrenomTuteur(?string $prenom_tuteur): void
    {
        $this->prenom_tuteur = $prenom_tuteur;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}