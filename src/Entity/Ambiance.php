<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AmbianceRepository")
 */
class Ambiance
{
    private function __construct(){
        $this->tabFormulaires = new ArrayCollection;
        $this->tabForms = new ArrayCollection;
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_ambiance;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $nom;

    /**
    * @ORM\OneToMany(targetEntity="Formulaire",mappedBy="ambiance") 
    */
    private $tabFormulaires;

    /**
    * @ORM\OneToMany(targetEntity="FormEntreprise",mappedBy="ambiance") 
    */
    private $tabForms;


    public function getId_ambiance(): ?int
    {
        return $this->id_ambiance;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * Get the value of tabForms
     */ 
    public function getTabForms()
    {
        return $this->tabForms;
    }

    /**
     * Set the value of tabForms
     *
     * @return  self
     */ 
    public function setTabForms($tabForms)
    {
        $this->tabForms = $tabForms;

        return $this;
    }
}
