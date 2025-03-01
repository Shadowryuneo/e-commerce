<?php

namespace App\Entity;

use App\Repository\DetailcommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailcommandeRepository::class)]
class Detailcommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiterdesproduits = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getQuantiterdesproduits(): ?int
    {
        return $this->quantiterdesproduits;
    }

    public function setQuantiterdesproduits(?int $quantiterdesproduits): static
    {
        $this->quantiterdesproduits = $quantiterdesproduits;

        return $this;
    }
}
