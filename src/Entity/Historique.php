<?php

namespace App\Entity;

use App\Repository\HistoriqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriqueRepository::class)]
class Historique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idhistorique = null;

    #[ORM\Column(length: 50)]
    private ?string $numenvoi = null;

    #[ORM\Column(length: 50)]
    private ?string $bureauorigine = null;

    #[ORM\Column(length: 50)]
    private ?string $bureauPasse = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\Column(nullable: true)]
    private ?int $isactive = null;

    #[ORM\Column(length: 255)]
    private ?string $chemin = null;

    #[ORM\Column(length: 50)]
    private ?string $parcours = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datehistorique = null;

    #[ORM\Column(length: 75, nullable: true)]
    private ?string $bursuiv = null;

    #[ORM\Column(length: 75, nullable: true)]
    private ?string $burprec = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datehistoriquefull = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdhistorique(): ?int
    {
        return $this->idhistorique;
    }

    public function setIdhistorique(int $idhistorique): self
    {
        $this->idhistorique = $idhistorique;

        return $this;
    }

    public function getNumenvoi(): ?string
    {
        return $this->numenvoi;
    }

    public function setNumenvoi(string $numenvoi): self
    {
        $this->numenvoi = $numenvoi;

        return $this;
    }

    public function getBureauorigine(): ?string
    {
        return $this->bureauorigine;
    }

    public function setBureauorigine(string $bureauorigine): self
    {
        $this->bureauorigine = $bureauorigine;

        return $this;
    }

    public function getBureauPasse(): ?string
    {
        return $this->bureauPasse;
    }

    public function setBureauPasse(string $bureauPasse): self
    {
        $this->bureauPasse = $bureauPasse;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getIsactive(): ?int
    {
        return $this->isactive;
    }

    public function setIsactive(?int $isactive): self
    {
        $this->isactive = $isactive;

        return $this;
    }

    public function getChemin(): ?string
    {
        return $this->chemin;
    }

    public function setChemin(string $chemin): self
    {
        $this->chemin = $chemin;

        return $this;
    }

    public function getParcours(): ?string
    {
        return $this->parcours;
    }

    public function setParcours(string $parcours): self
    {
        $this->parcours = $parcours;

        return $this;
    }

    public function getDatehistorique(): ?\DateTimeInterface
    {
        return $this->datehistorique;
    }

    public function setDatehistorique(?\DateTimeInterface $datehistorique): self
    {
        $this->datehistorique = $datehistorique;

        return $this;
    }

    public function getBursuiv(): ?string
    {
        return $this->bursuiv;
    }

    public function setBursuiv(?string $bursuiv): self
    {
        $this->bursuiv = $bursuiv;

        return $this;
    }

    public function getBurprec(): ?string
    {
        return $this->burprec;
    }

    public function setBurprec(?string $burprec): self
    {
        $this->burprec = $burprec;

        return $this;
    }

    public function getDatehistoriquefull(): ?\DateTimeInterface
    {
        return $this->datehistoriquefull;
    }

    public function setDatehistoriquefull(?\DateTimeInterface $datehistoriquefull): self
    {
        $this->datehistoriquefull = $datehistoriquefull;

        return $this;
    }
}
