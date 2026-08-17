<?php

class Responsable
{
    private ?int $id;
    private string $nomResponsable;
    private string $prenomResponsable;
    private ?string $telephone;
    private ?string $email;

    public function __construct( ?int $id, string $nomResponsable, string $prenomResponsable, ?string $telephone = null, ?string $email = null
    ) {
        $this->id = $id;
        $this->nomResponsable = $nomResponsable;
        $this->prenomResponsable = $prenomResponsable;
        $this->telephone = $telephone;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomResponsable(): string
    {
        return $this->nomResponsable;
    }

    public function getPrenomResponsable(): string
    {
        return $this->prenomResponsable;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setNomResponsable(string $nomResponsable): void
    {
        $this->nomResponsable = $nomResponsable;
    }

    public function setPrenomResponsable(string $prenomResponsable): void
    {
        $this->prenomResponsable = $prenomResponsable;
    }

    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}