<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

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
    private $NbBillet;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $PrixTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NumeroCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean")
     */
    private $formule;

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\Billet",mappedBy="billetCommande", cascade={"persist","remove"})
    */
    private $billets;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateCommande;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbBillet(): ?int
    {
        return $this->NbBillet;
    }

    public function setNbBillet(int $NbBillet): self
    {
        $this->NbBillet = $NbBillet;

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

    public function getBillets()
    {
        return $this->billets;
    }

    /**
     * Set formule
     *
     * @param string $formule
     *
     * @return Commande
     */
    public function setFormule($formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return boolean
     */
    public function getformule()
    {
        return $this->formule;
    }


    public function __construct() {



        $this->billets = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function addBillet(Billet $billet)
    {
        $this->billets[]=$billet;
        return $this;
    }

    /**
     * @param ArrayCollection $billets
     */
    public function removeBillet(Billet $billet)
    {
        $this->billets->removeElement($billet);
    }
}
