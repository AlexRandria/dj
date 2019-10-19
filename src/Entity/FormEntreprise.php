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
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nom_du_lieu;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $adresse_du_lieu;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heure_debut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_personne;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nb_partie;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $format;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $formule;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nb_personne_formule;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $duree_formule;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $theme;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $public;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ambiance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ambiance_fin;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $style_dj;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $vetement_dj;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $repas_dj;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $habillage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $options;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom_responsable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email_chef;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $numero_chef;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adresse;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getAdresseDuLieu(): ?string
    {
        return $this->adresse_du_lieu;
    }

    public function setAdresseDuLieu(?string $adresse_du_lieu): self
    {
        $this->adresse_du_lieu = $adresse_du_lieu;

        return $this;
    }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heure_debut;
    }

    public function setHeureDebut(?\DateTimeInterface $heure_debut): self
    {
        $this->heure_debut = $heure_debut;

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

    public function getNbPartie(): ?string
    {
        return $this->nb_partie;
    }

    public function setNbPartie(?string $nb_partie): self
    {
        $this->nb_partie = $nb_partie;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getFormule(): ?string
    {
        return $this->formule;
    }

    public function setFormule(?string $formule): self
    {
        $this->formule = $formule;

        return $this;
    }

    public function getNbPersonneFormule(): ?string
    {
        return $this->nb_personne_formule;
    }

    public function setNbPersonneFormule(?string $nb_personne_formule): self
    {
        $this->nb_personne_formule = $nb_personne_formule;

        return $this;
    }

    public function getDureeFormule(): ?string
    {
        return $this->duree_formule;
    }

    public function setDureeFormule(?string $duree_formule): self
    {
        $this->duree_formule = $duree_formule;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getPublic(): ?string
    {
        return $this->public;
    }

    public function setPublic(?string $public): self
    {
        $this->public = $public;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getNationalite() 
    {
        return $this->nationalite;
    }

    public function setNationalite( $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getAmbiance()
    {
        return $this->ambiance;
    }

    public function setAmbiance( $ambiance): self
    {
        $this->ambiance = $ambiance;

        return $this;
    }

    public function getAmbianceFin()
    {
        return $this->ambiance_fin;
    }

    public function setAmbianceFin( $ambiance_fin): self
    {
        $this->ambiance_fin = $ambiance_fin;

        return $this;
    }

    public function getStyleDj(): ?string
    {
        return $this->style_dj;
    }

    public function setStyleDj(?string $style_dj): self
    {
        $this->style_dj = $style_dj;

        return $this;
    }

    public function getVetementDj(): ?string
    {
        return $this->vetement_dj;
    }

    public function setVetementDj(?string $vetement_dj): self
    {
        $this->vetement_dj = $vetement_dj;

        return $this;
    }

    public function getRepasDj(): ?string
    {
        return $this->repas_dj;
    }

    public function setRepasDj(?string $repas_dj): self
    {
        $this->repas_dj = $repas_dj;

        return $this;
    }

    public function getHabillage(): ?string
    {
        return $this->habillage;
    }

    public function setHabillage(?string $habillage): self
    {
        $this->habillage = $habillage;

        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getNomResponsable(): ?string
    {
        return $this->nom_responsable;
    }

    public function setNomResponsable(?string $nom_responsable): self
    {
        $this->nom_responsable = $nom_responsable;

        return $this;
    }

    public function getEmailChef(): ?string
    {
        return $this->email_chef;
    }

    public function setEmailChef(?string $email_chef): self
    {
        $this->email_chef = $email_chef;

        return $this;
    }

    public function getNumeroChef(): ?string
    {
        return $this->numero_chef;
    }

    public function setNumeroChef(?string $numero_chef): self
    {
        $this->numero_chef = $numero_chef;

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

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
}
