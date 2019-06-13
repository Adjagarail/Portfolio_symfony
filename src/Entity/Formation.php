<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\FormationRepository")
 */
class Formation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_deb;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_fin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Diplome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ecole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->Date_deb;
    }

    public function setDateDeb(\DateTimeInterface $Date_deb): self
    {
        $this->Date_deb = $Date_deb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->Date_fin;
    }

    public function setDateFin(\DateTimeInterface $Date_fin): self
    {
        $this->Date_fin = $Date_fin;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->Diplome;
    }

    public function setDiplome(string $Diplome): self
    {
        $this->Diplome = $Diplome;

        return $this;
    }

    public function getEcole(): ?string
    {
        return $this->Ecole;
    }

    public function setEcole(string $Ecole): self
    {
        $this->Ecole = $Ecole;

        return $this;
    }
}
