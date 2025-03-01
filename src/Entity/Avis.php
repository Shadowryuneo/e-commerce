<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $formulairavis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormulairavis(): ?string
    {
        return $this->formulairavis;
    }

    public function setFormulairavis(?string $formulairavis): static
    {
        $this->formulairavis = $formulairavis;

        return $this;
    }
}
