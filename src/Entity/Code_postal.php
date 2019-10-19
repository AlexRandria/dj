<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Code_postalRepository")
 */
class Code_postal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $nom_commune;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $code_postal;


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

    public function getNom_commune(): ?string
    {
        return $this->nom_commune;
    }

    public function setNom_commune(?string $nom_commune): self
    {
        $this->nom_commune = $nom_commune;

        return $this;
    }
}
