<?php

class Transfert
{
    private ?int $id;
    private ?int $inscription_id;
    private ?string $type_transfert;

    public function __construct(

        ?int $id = null,
        ?int $inscription_id = null,
        ?string $type_transfert = null
    ) {
        $this->id = $id;
        $this->inscription_id = $inscription_id;
        $this->type_transfert = $type_transfert;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInscriptionId(): ?int
    {
        return $this->inscription_id;
    }

    public function setInscriptionId(?int $inscription_id): void
    {
        $this->inscription_id = $inscription_id;
    }

    public function getTypeTransfert(): ?string
    {
        return $this->type_transfert;
    }

    public function setTypeTransfert(?string $type_transfert): void
    {
        
        $this->type_transfert = $type_transfert;
    }
}