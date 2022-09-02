<?php

namespace App\Entity;

use App\Repository\EnvoiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnvoiRepository::class)]
class Envoi
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(length: 255)]
    private ?string $numenvoi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codebarre = null;

    #[ORM\Column]
    private ?float $poids = null;

    #[ORM\Column(nullable: true)]
    private ?int $bureauori = null;

    #[ORM\Column(nullable: true)]
    private ?int $bureauexp = null;

    #[ORM\Column(nullable: true)]
    private ?int $bureaudest = null;

    #[ORM\Column(nullable: true)]
    private ?int $bureaupass = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateenvoi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeenvoi = null;

    #[ORM\Column(nullable: true)]
    private ?float $prixrapida = null;

    #[ORM\Column(nullable: true)]
    private ?int $zone = null;


    public function getNumenvoi(): ?string
    {
        return $this->numenvoi;
    }

    public function setNumenvoi(string $numenvoi): self
    {
        $this->numenvoi = $numenvoi;

        return $this;
    }

    public function getCodebarre(): ?string
    {
        return $this->codebarre;
    }

    public function setCodebarre(?string $codebarre): self
    {
        $this->codebarre = $codebarre;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getBureauori(): ?int
    {
        return $this->bureauori;
    }

    public function setBureauori(?int $bureauori): self
    {
        $this->bureauori = $bureauori;

        return $this;
    }

    public function getBureauexp(): ?int
    {
        return $this->bureauexp;
    }

    public function setBureauexp(?int $bureauexp): self
    {
        $this->bureauexp = $bureauexp;

        return $this;
    }

    public function getBureaudest(): ?int
    {
        return $this->bureaudest;
    }

    public function setBureaudest(?int $bureaudest): self
    {
        $this->bureaudest = $bureaudest;

        return $this;
    }

    public function getBureaupass(): ?int
    {
        return $this->bureaupass;
    }

    public function setBureaupass(?int $bureaupass): self
    {
        $this->bureaupass = $bureaupass;

        return $this;
    }

    public function getDateenvoi(): ?\DateTimeInterface
    {
        return $this->dateenvoi;
    }

    public function setDateenvoi(?\DateTimeInterface $dateenvoi): self
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    public function getTypeenvoi(): ?string
    {
        return $this->typeenvoi;
    }

    public function setTypeenvoi(?string $typeenvoi): self
    {
        $this->typeenvoi = $typeenvoi;

        return $this;
    }

    public function getPrixrapida(): ?float
    {
        return $this->prixrapida;
    }

    public function setPrixrapida(?float $prixrapida): self
    {
        $this->prixrapida = $prixrapida;

        return $this;
    }

    public function getZone(): ?int
    {
        return $this->zone;
    }

    public function setZone(?int $zone): self
    {
        $this->zone = $zone;

        return $this;
    }
}
