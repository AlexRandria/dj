<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormulaireRepository")
 */
class Formulaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $nom_du_lieu;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heure_de_debut;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $deroulement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_personne;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $ambiance;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $budget;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $champ_libre;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $numero;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(?string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNomDuLieu(): ?string
    {
        return $this->nom_du_lieu;
    }

    public function setNomDuLieu(?string $nom_du_lieu): self
    {
        $this->nom_du_lieu = $nom_du_lieu;

        return $this;
    }

    public function getHeureDeDebut(): ?\DateTimeInterface
    {
        return $this->heure_de_debut;
    }

    public function setHeureDeDebut(?\DateTimeInterface $heure_de_debut): self
    {
        $this->heure_de_debut = $heure_de_debut;

        return $this;
    }

    public function getDeroulement(): ?string
    {
        return $this->deroulement;
    }

    public function setDeroulement(?string $deroulement): self
    {
        $this->deroulement = $deroulement;

        return $this;
    }

    public function getNbPersonne(): ?int
    {
        return $this->nb_personne;
    }

    public function setNbPersonne(?int $nb_personne): self
    {
        $this->nb_personne = $nb_personne;

        return $this;
    }

    public function getAmbiance(): ?string
    {
        return $this->ambiance;
    }

    public function setAmbiance(?string $ambiance): self
    {
        $this->ambiance = $ambiance;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(?string $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getChampLibre(): ?string
    {
        return $this->champ_libre;
    }

    public function setChampLibre(?string $champ_libre): self
    {
        $this->champ_libre = $champ_libre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
}
