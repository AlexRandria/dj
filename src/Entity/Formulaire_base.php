<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Formulaire_baseRepository")
 */
class Formulaire_base
{
    public function __construct(){
        $this->date_capture = new \DateTime('now');
        $this->tabFormulaires = new ArrayCollection;
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_formulaire_base;

    /**
     * @ORM\Column(type="datetimetz", nullable=true)
     */
    private $date_capture;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $nom_du_lieu;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_personne;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heure_de_debut;

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
        
    /**
    * @ORM\OneToMany(targetEntity="Formulaire",mappedBy="formulaire_base") 
    */
    private $tabFormulaires;

    public function getIdFormulaireBase(): ?int
    {
        return $this->id_formulaire_base;
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


    /**
     * Get the value of tabFormulaires
     */ 
    public function getTabFormulaires()
    {
        return $this->tabFormulaires;
    }

    /**
     * Set the value of tabFormulaires
     *
     * @return  self
     */ 
    public function setTabFormulaires($tabFormulaires)
    {
        $this->tabFormulaires = $tabFormulaires;

        return $this;
    }

    /**
     * Get the value of heure_de_debut
     */ 
    public function getHeureDeDebut()
    {
        return $this->heure_de_debut;
    }

    /**
     * Set the value of heure_de_debut
     *
     * @return  self
     */ 
    public function setHeureDeDebut($heure_de_debut)
    {
        $this->heure_de_debut = $heure_de_debut;

        return $this;
    }

    /**
     * Get the value of nb_personne
     */ 
    public function getNbPersonne()
    {
        return $this->nb_personne;
    }

    /**
     * Set the value of nb_personne
     *
     * @return  self
     */ 
    public function setNbPersonne($nb_personne)
    {
        $this->nb_personne = $nb_personne;

        return $this;
    }
}
