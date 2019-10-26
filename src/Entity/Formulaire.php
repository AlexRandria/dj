<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormulaireRepository")
 */
class Formulaire
{
    public function __construct(){
        $this->date_capture = new \DateTime('now');
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_formulaire;

    /** 
    * @ORM\ManyToOne(targetEntity="Formulaire_base", inversedBy="tabFormulaires") 
    * @ORM\JoinColumn(name="id_formulaire_base", referencedColumnName="id_formulaire_base") 
    */
    private $formulaire_base;

     /** 
    * @ORM\ManyToOne(targetEntity="CodePostal", inversedBy="tabFormulaires") 
    * @ORM\JoinColumn(name="id_code_postal", referencedColumnName="id_code_postal") 
    */
    private $codePostal;

    /** 
    * @ORM\ManyToOne(targetEntity="Deroulement", inversedBy="tabFormulaires") 
    * @ORM\JoinColumn(name="id_deroulement", referencedColumnName="id_deroulement") 
    */
    private $deroulement;

    /** 
    * @ORM\ManyToOne(targetEntity="Ambiance", inversedBy="tabFormulaires") 
    * @ORM\JoinColumn(name="id_ambiance", referencedColumnName="id_ambiance") 
    */
    private $ambiance;

    /** 
    * @ORM\ManyToOne(targetEntity="Budget", inversedBy="tabFormulaires") 
    * @ORM\JoinColumn(name="id_budget", referencedColumnName="id_budget") 
    */
    private $budget;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $champ_libre;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * Get the value of ambiance
     */ 
    public function getAmbiance()
    {
        return $this->ambiance;
    }

    /**
     * Set the value of ambiance
     *
     * @return  self
     */ 
    public function setAmbiance($ambiance)
    {
        $this->ambiance = $ambiance;
        return $this;
    }

    /**
     * Get the value of deroulement
     */ 
    public function getDeroulement()
    {
        return $this->deroulement;
    }

    /**
     * Set the value of deroulement
     *
     * @return  self
     */ 
    public function setDeroulement($deroulement)
    {
        $this->deroulement = $deroulement;
        return $this;
    }

    /**
     * Get the value of budget
     */ 
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set the value of budget
     *
     * @return  self
     */ 
    public function setBudget($budget)
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * Get the value of codePostal
     */ 
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     *
     * @return  self
     */ 
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get the value of formulaire_base
     */ 
    public function getFormulaireBase()
    {
        return $this->formulaire_base;
    }

    /**
     * Set the value of formulaire_base
     *
     * @return  self
     */ 
    public function setFormulaireBase($formulaire_base)
    {
        $this->formulaire_base = $formulaire_base;

        return $this;
    }
}
