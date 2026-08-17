<?php

class Utilisateur
{
    private ?int $id;
    private string $nomUtilisateur;
    private string $prenomUtilisateur;
    private int $roleId;

    public function __construct( ?int $id, string $nomUtilisateur, string $prenomUtilisateur, int $roleId) {
        
        $this->id = $id;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->prenomUtilisateur = $prenomUtilisateur;
        $this->roleId = $roleId;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUtilisateur(): string
    {
        return $this->nomUtilisateur;
    }

    public function getPrenomUtilisateur(): string
    {
        return $this->prenomUtilisateur;
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    public function setNomUtilisateur(string $nomUtilisateur): void
    {
        $this->nomUtilisateur = $nomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): void
    {
        $this->prenomUtilisateur = $prenomUtilisateur;
    }

    public function setRoleId(int $roleId): void
    {
        $this->roleId = $roleId;
    }
}