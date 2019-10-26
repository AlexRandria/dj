<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormEntrepriseRepository")
 */
class FormEntreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_formEntreprise;

    /** 
    * @ORM\ManyToOne(targetEntity="Formulaire_base", inversedBy="tabFormEntreprises") 
    * @ORM\JoinColumn(name="id_formulaire_base", referencedColumnName="id_formulaire_base") 
    */
    private $formulaire_base;

     /** 
    * @ORM\ManyToOne(targetEntity="Type", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_type", referencedColumnName="id_type") 
    */
    private $type;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $adresse_du_lieu;

     /** 
    * @ORM\ManyToOne(targetEntity="Nb_partie", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_nb_partie", referencedColumnName="id_nb_partie") 
    */
    private $nb_partie;

     /** 
    * @ORM\ManyToOne(targetEntity="Format", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_format", referencedColumnName="id_format") 
    */
    private $format;

     /** 
    * @ORM\ManyToOne(targetEntity="Formule", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_formule", referencedColumnName="id_formule") 
    */
    private $formule;

     /** 
    * @ORM\ManyToOne(targetEntity="Nb_personne_formule", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_nb_personne_formule", referencedColumnName="id_nb_personne_formule") 
    */
    private $nb_personne_formule;

     /** 
    * @ORM\ManyToOne(targetEntity="Duree_formule", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_duree_formule", referencedColumnName="id_duree_formule") 
    */
    private $duree_formule;

     /** 
    * @ORM\ManyToOne(targetEntity="Publique", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_publique", referencedColumnName="id_publique") 
    */
    private $publique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $theme;
    
     /** 
    * @ORM\ManyToOne(targetEntity="Nationalite", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_nationalite", referencedColumnName="id_nationalite") 
    */
    private $nationalite;

     /** 
    * @ORM\ManyToOne(targetEntity="Ambiance", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_ambiance", referencedColumnName="id_ambiance") 
    */
    private $ambiance;

     /** 
    * @ORM\ManyToOne(targetEntity="Ambiance", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_ambiance", referencedColumnName="id_ambiance") 
    */
    private $ambiance_fin;

     /** 
    * @ORM\ManyToOne(targetEntity="Style_dj", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_style_dj", referencedColumnName="id_style_dj") 
    */
    private $style_dj;

     /** 
    * @ORM\ManyToOne(targetEntity="Vetement_dj", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_vetement_dj", referencedColumnName="id_vetement_dj") 
    */
    private $vetement_dj;

     /** 
    * @ORM\ManyToOne(targetEntity="Repas_dj", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_repas_dj", referencedColumnName="id_repas_dj") 
    */
    private $repas_dj;

     /** 
    * @ORM\ManyToOne(targetEntity="Habillage", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_habillage", referencedColumnName="id_habillage") 
    */
    private $habillage;

     /** 
    * @ORM\ManyToOne(targetEntity="Options", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_options", referencedColumnName="id_options") 
    */
    private $options;

     /** 
    * @ORM\ManyToOne(targetEntity="Fonction", inversedBy="tabForms") 
    * @ORM\JoinColumn(name="id_fonction", referencedColumnName="id_fonction") 
    */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom_responsable;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $numero_chef;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adresse;


    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


    /**
     * Get the value of adresse_du_lieu
     */ 
    public function getAdresseDuLieu()
    {
        return $this->adresse_du_lieu;
    }

    /**
     * Set the value of adresse_du_lieu
     *
     * @return  self
     */ 
    public function setAdresseDuLieu($adresse_du_lieu)
    {
        $this->adresse_du_lieu = $adresse_du_lieu;

        return $this;
    }

    /**
     * Get the value of nb_partie
     */ 
    public function getNbPartie()
    {
        return $this->nb_partie;
    }

    /**
     * Set the value of nb_partie
     *
     * @return  self
     */ 
    public function setNbPartie($nb_partie)
    {
        $this->nb_partie = $nb_partie;

        return $this;
    }

    /**
     * Get the value of format
     */ 
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */ 
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get the value of formule
     */ 
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set the value of formule
     *
     * @return  self
     */ 
    public function setFormule($formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get the value of nb_personne_formule
     */ 
    public function getNbPersonneFormule()
    {
        return $this->nb_personne_formule;
    }

    /**
     * Set the value of nb_personne_formule
     *
     * @return  self
     */ 
    public function setNbPersonneFormule($nb_personne_formule)
    {
        $this->nb_personne_formule = $nb_personne_formule;

        return $this;
    }

    /**
     * Get the value of duree_formule
     */ 
    public function getDureeFormule()
    {
        return $this->duree_formule;
    }

    /**
     * Set the value of duree_formule
     *
     * @return  self
     */ 
    public function setDureeFormule($duree_formule)
    {
        $this->duree_formule = $duree_formule;

        return $this;
    }

    /**
     * Get the value of public
     */ 
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set the value of public
     *
     * @return  self
     */ 
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of nationalite
     */ 
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     *
     * @return  self
     */ 
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

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
     * Get the value of ambiance_fin
     */ 
    public function getAmbianceFin()
    {
        return $this->ambiance_fin;
    }

    /**
     * Set the value of ambiance_fin
     *
     * @return  self
     */ 
    public function setAmbianceFin($ambiance_fin)
    {
        $this->ambiance_fin = $ambiance_fin;

        return $this;
    }

    /**
     * Get the value of style_dj
     */ 
    public function getStyleDj()
    {
        return $this->style_dj;
    }

    /**
     * Set the value of style_dj
     *
     * @return  self
     */ 
    public function setStyleDj($style_dj)
    {
        $this->style_dj = $style_dj;

        return $this;
    }

    /**
     * Get the value of vetement_dj
     */ 
    public function getVetementDj()
    {
        return $this->vetement_dj;
    }

    /**
     * Set the value of vetement_dj
     *
     * @return  self
     */ 
    public function setVetementDj($vetement_dj)
    {
        $this->vetement_dj = $vetement_dj;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of options
     */ 
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of options
     *
     * @return  self
     */ 
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get the value of habillage
     */ 
    public function getHabillage()
    {
        return $this->habillage;
    }

    /**
     * Set the value of habillage
     *
     * @return  self
     */ 
    public function setHabillage($habillage)
    {
        $this->habillage = $habillage;

        return $this;
    }

    /**
     * Get the value of repas_dj
     */ 
    public function getRepasDj()
    {
        return $this->repas_dj;
    }

    /**
     * Set the value of repas_dj
     *
     * @return  self
     */ 
    public function setRepasDj($repas_dj)
    {
        $this->repas_dj = $repas_dj;

        return $this;
    }

    /**
     * Get the value of fonction
     */ 
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set the value of fonction
     *
     * @return  self
     */ 
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get the value of nom_responsable
     */ 
    public function getNomResponsable()
    {
        return $this->nom_responsable;
    }

    /**
     * Set the value of nom_responsable
     *
     * @return  self
     */ 
    public function setNomResponsable($nom_responsable)
    {
        $this->nom_responsable = $nom_responsable;

        return $this;
    }

    /**
     * Get the value of numero_chef
     */ 
    public function getNumeroChef()
    {
        return $this->numero_chef;
    }

    /**
     * Set the value of numero_chef
     *
     * @return  self
     */ 
    public function setNumeroChef($numero_chef)
    {
        $this->numero_chef = $numero_chef;

        return $this;
    }


    /**
     * Get the value of theme
     */ 
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */ 
    public function setTheme($theme)
    {
        $this->theme = $theme;

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

    /**
     * Get the value of publique
     */ 
    public function getPublique()
    {
        return $this->publique;
    }

    /**
     * Set the value of publique
     *
     * @return  self
     */ 
    public function setPublique($publique)
    {
        $this->publique = $publique;

        return $this;
    }
}
