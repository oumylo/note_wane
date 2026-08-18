<?php

class Utilisateur
{
    private ?int $id;
    private ?string $prenom_utilisateur;
    private ?string $nom_utilisateur;
    private ?string $login;
    private ?string $password;
    private ?int $role_id;

    public function __construct(
        
        ?int $id = null,
        ?string $prenom_utilisateur = null,
        ?string $nom_utilisateur = null,
        ?string $login = null,
        ?string $password = null,
        ?int $role_id = null
    ) {
        $this->id = $id;
        $this->prenom_utilisateur = $prenom_utilisateur;
        $this->nom_utilisateur = $nom_utilisateur;
        $this->login = $login;
        $this->password = $password;
        $this->role_id = $role_id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenom_utilisateur;
    }

    public function setPrenomUtilisateur(?string $prenom_utilisateur): void
    {
        $this->prenom_utilisateur = $prenom_utilisateur;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(?string $nom_utilisateur): void
    {
        $this->nom_utilisateur = $nom_utilisateur;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): void
    {
        $this->login = $login;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId(?int $role_id): void
    {
        $this->role_id = $role_id;
    }
}