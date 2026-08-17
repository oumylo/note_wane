<?php

class Inscription
{
    private ?int $id;
    private int $eleveId;
    private ?int $classeId;
    private int $anneeScolaireId;
    private int $etablissementId;
    private int $statutId;
    private ?string $dateInscription;

    public function __construct( ?int $id, int $eleveId, ?int $classeId, int $anneeScolaireId, int $etablissementId, int $statutId,  ?string $dateInscription = null) {
        
        $this->id = $id;
        $this->eleveId = $eleveId;
        $this->classeId = $classeId;
        $this->anneeScolaireId = $anneeScolaireId;
        $this->etablissementId = $etablissementId;
        $this->statutId = $statutId;
        $this->dateInscription = $dateInscription;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEleveId(): int
    {
        return $this->eleveId;
    }

    public function getClasseId(): ?int
    {
        return $this->classeId;
    }

    public function getAnneeScolaireId(): int
    {
        return $this->anneeScolaireId;
    }

    public function getEtablissementId(): int
    {
        return $this->etablissementId;
    }

    public function getStatutId(): int
    {
        return $this->statutId;
    }

    public function getDateInscription(): ?string
    {
        return $this->dateInscription;
    }

    public function setEleveId(int $eleveId): void
    {
        $this->eleveId = $eleveId;
    }

    public function setClasseId(?int $classeId): void
    {
        $this->classeId = $classeId;
    }

    public function setAnneeScolaireId(int $anneeScolaireId): void
    {
        $this->anneeScolaireId = $anneeScolaireId;
    }

    public function setEtablissementId(int $etablissementId): void
    {
        $this->etablissementId = $etablissementId;
    }

    public function setStatutId(int $statutId): void
    {
        $this->statutId = $statutId;
    }

    public function setDateInscription(?string $dateInscription): void
    {
        $this->dateInscription = $dateInscription;
    }
}