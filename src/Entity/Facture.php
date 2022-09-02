<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idfiche = null;

    #[ORM\Column(length: 255)]
    private ?string $numenvoi = null;

    #[ORM\Column]
    private ?int $idpersexp = null;

    #[ORM\Column]
    private ?int $idpersdest = null;

    #[ORM\Column]
    private ?float $prixrapida = null;

    #[ORM\Column]
    private ?float $autre = null;

    #[ORM\Column(length: 255)]
    private ?string $codebarre = null;

    #[ORM\Column(length: 255)]
    private ?string $numfacture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numbordereau = null;

    #[ORM\Column(nullable: true)]
    private ?int $idbureau = null;

    #[ORM\Column(nullable: true)]
    private ?int $idtypepaim = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateenvoi = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdfiche(): ?int
    {
        return $this->idfiche;
    }

    public function setIdfiche(int $idfiche): self
    {
        $this->idfiche = $idfiche;

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

    public function getIdpersexp(): ?int
    {
        return $this->idpersexp;
    }

    public function setIdpersexp(int $idpersexp): self
    {
        $this->idpersexp = $idpersexp;

        return $this;
    }

    public function getIdpersdest(): ?int
    {
        return $this->idpersdest;
    }

    public function setIdpersdest(int $idpersdest): self
    {
        $this->idpersdest = $idpersdest;

        return $this;
    }

    public function getPrixrapida(): ?float
    {
        return $this->prixrapida;
    }

    public function setPrixrapida(float $prixrapida): self
    {
        $this->prixrapida = $prixrapida;

        return $this;
    }

    public function getAutre(): ?float
    {
        return $this->autre;
    }

    public function setAutre(float $autre): self
    {
        $this->autre = $autre;

        return $this;
    }

    public function getCodebarre(): ?string
    {
        return $this->codebarre;
    }

    public function setCodebarre(string $codebarre): self
    {
        $this->codebarre = $codebarre;

        return $this;
    }

    public function getNumfacture(): ?string
    {
        return $this->numfacture;
    }

    public function setNumfacture(string $numfacture): self
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    public function getNumbordereau(): ?string
    {
        return $this->numbordereau;
    }

    public function setNumbordereau(?string $numbordereau): self
    {
        $this->numbordereau = $numbordereau;

        return $this;
    }

    public function getIdbureau(): ?int
    {
        return $this->idbureau;
    }

    public function setIdbureau(?int $idbureau): self
    {
        $this->idbureau = $idbureau;

        return $this;
    }

    public function getIdtypepaim(): ?int
    {
        return $this->idtypepaim;
    }

    public function setIdtypepaim(?int $idtypepaim): self
    {
        $this->idtypepaim = $idtypepaim;

        return $this;
    }

    public function getDateenvoi(): ?\DateTimeInterface
    {
        return $this->dateenvoi;
    }

    public function setDateenvoi(\DateTimeInterface $dateenvoi): self
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }
}
