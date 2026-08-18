<?php

class Inscription
{
    private ?int $id;
    private ?int $eleve_id;
    private ?int $classe_id;
    private ?int $annee_scolaire_id;
    private ?int $etablissement_id;
    private ?int $statut_id;
    private ?string $date_inscription;

    public function __construct(
        
        ?int $id = null,
        ?int $eleve_id = null,
        ?int $classe_id = null,
        ?int $annee_scolaire_id = null,
        ?int $etablissement_id = null,
        ?int $statut_id = null,
        ?string $date_inscription = null
    ) {
        $this->id = $id;
        $this->eleve_id = $eleve_id;
        $this->classe_id = $classe_id;
        $this->annee_scolaire_id = $annee_scolaire_id;
        $this->etablissement_id = $etablissement_id;
        $this->statut_id = $statut_id;
        $this->date_inscription = $date_inscription;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEleveId(): ?int
    {
        return $this->eleve_id;
    }

    public function setEleveId(?int $eleve_id): void
    {
        $this->eleve_id = $eleve_id;
    }

    public function getClasseId(): ?int
    {
        return $this->classe_id;
    }

    public function setClasseId(?int $classe_id): void
    {
        $this->classe_id = $classe_id;
    }

    public function getAnneeScolaireId(): ?int
    {
        return $this->annee_scolaire_id;
    }

    public function setAnneeScolaireId(?int $annee_scolaire_id): void
    {
        $this->annee_scolaire_id = $annee_scolaire_id;
    }

    public function getEtablissementId(): ?int
    {
        return $this->etablissement_id;
    }

    public function setEtablissementId(?int $etablissement_id): void
    {
        $this->etablissement_id = $etablissement_id;
    }

    public function getStatutId(): ?int
    {
        return $this->statut_id;
    }

    public function setStatutId(?int $statut_id): void
    {
        $this->statut_id = $statut_id;
    }

    public function getDateInscription(): ?string
    {
        return $this->date_inscription;
    }

    public function setDateInscription(?string $date_inscription): void
    {
        $this->date_inscription = $date_inscription;
    }
}