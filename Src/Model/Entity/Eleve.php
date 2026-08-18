<?php

class Eleve
{
    private ?int $id;
    private ?string $matricule_eleve;
    private ?string $nom_eleve;
    private ?string $prenom_eleve;
    private ?string $date_naissance;
    private ?int $tuteur_id;

    public function __construct(
        
        ?int $id = null,
        ?string $matricule_eleve = null,
        ?string $nom_eleve = null,
        ?string $prenom_eleve = null,
        ?string $date_naissance = null,
        ?int $tuteur_id = null
    ) {
        $this->id = $id;
        $this->matricule_eleve = $matricule_eleve;
        $this->nom_eleve = $nom_eleve;
        $this->prenom_eleve = $prenom_eleve;
        $this->date_naissance = $date_naissance;
        $this->tuteur_id = $tuteur_id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeEleve(): ?string
    {
        return $this->matricule_eleve;
    }

    public function setMatriculeEleve(?string $matricule_eleve): void
    {
        $this->matricule_eleve = $matricule_eleve;
    }

    public function getNomEleve(): ?string
    {
        return $this->nom_eleve;
    }

    public function setNomEleve(?string $nom_eleve): void
    {
        $this->nom_eleve = $nom_eleve;
    }

    public function getPrenomEleve(): ?string
    {
        return $this->prenom_eleve;
    }

    public function setPrenomEleve(?string $prenom_eleve): void
    {
        $this->prenom_eleve = $prenom_eleve;
    }

    public function getDateNaissance(): ?string
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(?string $date_naissance): void
    {
        $this->date_naissance = $date_naissance;
    }

    public function getTuteurId(): ?int
    {
        return $this->tuteur_id;
    }

    public function setTuteurId(?int $tuteur_id): void
    {
        $this->tuteur_id = $tuteur_id;
    }
}