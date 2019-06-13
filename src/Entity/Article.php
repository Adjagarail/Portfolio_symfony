<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Poster;

    /**
     * @ORM\Column(type="text")
     */
    private $Article;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Auteur;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Publication;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->Poster;
    }

    public function setPoster(?string $Poster): self
    {
        $this->Poster = $Poster;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->Article;
    }

    public function setArticle(string $Article): self
    {
        $this->Article = $Article;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getPublication(): ?\DateTimeInterface
    {
        return $this->Publication;
    }

    public function setPublication(?\DateTimeInterface $Publication): self
    {
        $this->Publication = $Publication;

        return $this;
    }
}
