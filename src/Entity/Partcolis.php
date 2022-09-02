<?php

namespace App\Entity;

use App\Repository\PartcolisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartcolisRepository::class)]
class Partcolis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idpartcolis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdpartcolis(): ?string
    {
        return $this->idpartcolis;
    }

    public function setIdpartcolis(string $idpartcolis): self
    {
        $this->idpartcolis = $idpartcolis;

        return $this;
    }
}
