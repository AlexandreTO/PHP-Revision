<?php

namespace App\Entity;

class Animal
{
    private $id;
    private $nom;
    private $description;
    private $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }
}
