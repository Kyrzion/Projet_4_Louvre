<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreBillets;

    /**
     * @ORM\Column(type="integer")
     */
    private $PrixTotal;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateCommande;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Billet", mappedBy="billetCommande")
     */
    private $billet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreBillets(): ?int
    {
        return $this->NombreBillets;
    }

    public function setNombreBillets(int $NombreBillets): self
    {
        $this->NombreBillets = $NombreBillets;

        return $this;
    }

    public function getPrixTotal(): ?int
    {
        return $this->PrixTotal;
    }

    public function setPrixTotal(int $PrixTotal): self
    {
        $this->PrixTotal = $PrixTotal;

        return $this;
    }

    public function getNumeroCommande(): ?int
    {
        return $this->NumeroCommande;
    }

    public function setNumeroCommande(int $NumeroCommande): self
    {
        $this->NumeroCommande = $NumeroCommande;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->DateCommande;
    }

    public function setDateCommande(\DateTimeInterface $DateCommande): self
    {
        $this->DateCommande = $DateCommande;

        return $this;
    }


    public function __construct() {
        $this->billet = new ArrayCollection();
    }
}
