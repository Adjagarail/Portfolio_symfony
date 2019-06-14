<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ExperienceRepository")
 */
class Experience
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Poste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Structure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->Poste;
    }

    public function setPoste(string $Poste): self
    {
        $this->Poste = $Poste;

        return $this;
    }

    public function getStructure(): ?string
    {
        return $this->Structure;
    }

    public function setStructure(string $Structure): self
    {
        $this->Structure = $Structure;

        return $this;
    }
}
