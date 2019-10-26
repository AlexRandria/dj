<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BudgetRepository")
 */
class Budget
{
    private function __construct(){
        $this->tabBudgets = new ArrayCollection;
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_budget;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $nom;

    /**
    * @ORM\OneToMany(targetEntity="Formulaire",mappedBy="budget") 
    */
    private $tabFormulaires;


    public function getId_code_postal(): ?int
    {
        return $this->id_code_postal;
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
}
