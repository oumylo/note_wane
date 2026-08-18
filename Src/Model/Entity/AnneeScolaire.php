<?php

class AnneeScolaire
{
    private ?int $id;
    private ?string $libelle;
    private ?string $date_debut;
    private ?string $date_fin;

    public function __construct(

        ?int $id = null,
        ?string $libelle = null,
        ?string $date_debut = null,
        ?string $date_fin = null
    ) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): void
    {
        $this->libelle = $libelle;
    }

    public function getDateDebut(): ?string
    {
        return $this->date_debut;
    }

    public function setDateDebut(?string $date_debut): void
    {
        if($setDateDebut > $getDateFin){

            throw newException("La date de debut ne peut pas depasser la date de fin");
        }
        $this->date_debut = $date_debut;
    }

    public function getDateFin(): ?string
    {
         if($getDateFin < $setDateDebut ){
            throw newException("La date de fin ne peut pas etre inferieur à la date de debut");
        }
        return $this->date_fin;
    }

    public function setDateFin(?string $date_fin): void
    {
        if($getDateFin < $setDateDebut ){
            throw newException("La date de fin ne peut pas etre inferieur à la date de debut");
        }
        $this->date_fin = $date_fin;
    }
}