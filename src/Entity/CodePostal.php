<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CodePostalRepository")
 */
class CodePostal
{
    private function __construct(){
        $this->tabFormulaires = new ArrayCollection;
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_code_postal;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $nom_commune;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $code_postal;

    /**
    * @ORM\OneToMany(targetEntity="Formulaire",mappedBy="codePostal") 
    */
    private $tabFormulaires;

    public function getIdCodePostal(): ?int
    {
        return $this->id_code_postal;
    }

    public function getNomCommune(): ?string
    {
        return $this->nom_commune;
    }

    public function setNomCommune(?string $nom_commune): self
    {
        $this->nom_commune = $nom_commune;

        return $this;
    }

    /**
     * Get the value of code_postal
     */ 
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */ 
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;

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
