<?php

class Role
{
    private ?int $id;
    private ?string $role;

    public function __construct(
        ?int $id = null,
        ?string $role = null
    ) {
        $this->id = $id;
        $this->role = $role;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): void
    {
        $this->role = $role;
    }
}