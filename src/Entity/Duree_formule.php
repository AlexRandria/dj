<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Duree_formuleRepository")
 */
class Duree_formule
{
    private function __construct(){
        $this->tabForms = new ArrayCollection;
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_duree_formule;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $nom;
    
    /**
    * @ORM\OneToMany(targetEntity="FormEntreprise",mappedBy="type") 
    */
    private $tabForms;

    public function getId_duree_formule(): ?int
    {
        return $this->id_duree_formule;
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
